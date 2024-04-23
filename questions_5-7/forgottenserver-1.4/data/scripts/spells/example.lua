

local combat={}


-- Initialize the 4 areas needed for the visuals.
-- Seperated by the minimum required tables spawned in at a time.

-- 1 = damage area
-- 2 = player origin
-- 3 = damage area and player origin

-- Direction from origin on table to ingame directions.
-- Up = South
-- Right = West
-- Left = East
-- Down = North

-- areas are in a table to more easily relate it to the combat objects they are helping to initialize.
-- Two seperate tables since if both x and y coord are even or odd has a different animation Than
-- X being even or odd and y being even or odd the opposite of x.
local areas ={
				-- First table.  Spawns 3 large tornadoes and 3 smaller tornades
				{
					{0, 1, 0, 0, 0, 0, 0},
					{1, 0, 0, 2, 0, 0, 1},
					{0, 1, 0, 0, 0, 0, 0},
					{0, 0, 1, 0, 0, 0, 0},
					{0, 0, 0, 1, 0, 0, 0}
				}, 
	
				-- Spawns 2 large and 3 small tornades
				{
					{1, 0, 1, 0},
					{0, 0, 0, 1},
					{0, 2, 0, 0},
					{0, 1, 0, 1}
				}, 
				-- Spawns 4 large tornadoes
				{
					{1, 2, 1},
					{0, 0, 0},
					{1, 0, 1}
				}, 	
				-- Spawns 2 small tornadoes
				{
					{1},
					{1},
					{1},
					{2}
				}
			}

local spell = Spell(SPELL_INSTANT)
-- Loop to setup the basic combat parameters dependent on how many areas exist.
for k,v in ipairs(areas) do
	combat[k] = Combat()
	combat[k]:setParameter(COMBAT_PARAM_TYPE, COMBAT_ICEDAMAGE)					-- Sets the damage type to ice
	combat[k]:setParameter(COMBAT_PARAM_EFFECT, CONST_ME_ICETORNADO)			-- Sets the correct visuals.
	combat[k]:setArea(createCombatArea(v))										-- set the area to the combat object	

end

-- Function to cause damage to the target.
-- Taken from eternal winter.
function onGetFormulaValues(player, level, magicLevel)
	local min = (level / 5) + (magicLevel * 5.5) + 25
	local max = (level / 5) + (magicLevel * 11) + 50
	return -min, -max
end

-- Exit early if no area was set.
if combat[1] == nil then
	return;
end

combat[1]:setCallback(CALLBACK_PARAM_LEVELMAGICVALUE, "onGetFormulaValues")

-- Function used for on event.  Used to time the combat execution to the required offset.
function spellAnimation(cid, variant, framNum)
	combat[framNum]:execute(cid, variant)
end



function spell.onCastSpell(creature, variant)
	-- When to refresh the large tornados.  As the large tornades have a longer animation than the smaller ones
	-- Set the baseline reset of the loop based on that.  Since the large tornadoes do not despawn until the end of the spell.
	local resetLargeTornadoes = 990 

	-- Convert to cid to safetly pass to addEvent to correctly time when the spell effects should appear.
	local cid = creature:getId()

	-- Offset used to get the right area info. If position is the same offset the value by 4.
	local isSame = 0

	for k, v in pairs(variant.pos) do
		print(k)
		print(v)
	end

	-- The animation for the spell is repeated 3 times sequentially through all 4 areas.
	-- So to do that I started with the approximate timings I gathered from the video first batch of animations.
	-- Which ended up being about 0, 300, 500, 800 milliseconds respecitivly for each area.
	-- Than to get the reset time I got the length of the animations for the large tornadoes.
	-- Than I got the time on how long the total time it takes for the spell to end which was 1133 ms in length. but about 990 is when it starts to shrink.
	-- Which makes each batch of the animation a max of 990 ms.  Since going to far will make it noticibaly shrink unlike the video.
	for i = 0, 2, 1 do	
		addEvent(spellAnimation, 300 + resetLargeTornadoes * i, cid, variant, 2)
		addEvent(spellAnimation, 500 + resetLargeTornadoes * i, cid, variant, 3)
		addEvent(spellAnimation, 800 + resetLargeTornadoes * i, cid, variant, 4)
	end


	-- Not in the loop since it needs to be called immediatly to activate the spell immediatly and to say the key phrase.
	-- Making the addEvent say 0 starts the combat execution the next frame which desyncs the spell words from showing at the same time as the spell.
	-- With the first combat area is already off by one.  Put in the extra events outside the loop to prevent needing an extra if statement in the for loop.

	addEvent(spellAnimation, resetLargeTornadoes, cid, variant, 1)
	addEvent(spellAnimation, (resetLargeTornadoes*2), cid, variant, 1)
	return combat[1]:execute(cid, variant)
end


-- Required values to setup the spell.
spell:name("Winter Storm") -- Spell name shown in spell book.
spell:id(221)			   -- spellid
spell:words("frigo")	   -- keywords used to cast the spell.
spell:level(0)			   -- Set level to 0 to ensure anyone can cast it.
spell:mana(0)			   -- Set mana cost to 0 to easily test it.
spell:group("attack")      -- Spell seemed similar to the attack spells in the game so gave it to the attack group.
spell:soul(0)
spell:cooldown(2000)	   -- Spell cooldown.  Made it 2000 so I dont accidently use it again while testing the spell
spell:groupCooldown(2000)  
spell:needLearn(false)	   -- Set to false so you dont need to go learn the spell.
spell:vocation("druid")    -- All the ice spells are in the druid vocation.

spell:register()		   -- Register the spell to be used in the game.
