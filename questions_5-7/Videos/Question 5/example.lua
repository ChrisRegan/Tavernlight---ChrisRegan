local combat = Combat()
combat:setParameter(COMBAT_PARAM_TYPE, COMBAT_ICEDAMAGE)
combat:setParameter(COMBAT_PARAM_EFFECT, CONST_ME_ICETORNADO)


--Facing South
--[[local area = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 1, 1, 1, 2, 1, 1, 1},
	{ 1, 1, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}--]]

local areaEvent1 = {
	{ 0, 0, 0, 0, 0, 0, 0},
	{ 0, 0, 0, 0, 0, 0, 0},
	{ 0, 1, 0, 0, 0, 0, 0},
	{ 1, 1, 0, 2, 0, 0, 1},
	{ 1, 1, 0, 0, 0, 0, 1},
	{ 0, 1, 1, 0, 0, 0, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}

local areaEvent2 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 1, 1, 0, 2, 0, 1, 1},
	{ 1, 1, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 0, 0, 1, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}

local areaEvent3 = {
	{ 0, 0, 0, 0, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 1, 1, 1, 2, 1, 1, 1},
	{ 1, 1, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}

local areaEvent4 = {
	{ 0, 0, 0, 0, 0, 0, 0},
	{ 0, 0, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 0, 1, 1, 0},
	{ 1, 0, 1, 2, 1, 1, 1},
	{ 1, 0, 1, 1, 1, 1, 1},
	{ 0, 0, 1, 1, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent5 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 0, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 1, 1, 0},
	{ 1, 0, 1, 2, 1, 1, 1},
	{ 1, 0, 1, 1, 1, 1, 1},
	{ 0, 0, 1, 1, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent6 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 0, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 1, 0, 0},
	{ 1, 0, 1, 2, 1, 0, 1},
	{ 1, 0, 1, 0, 1, 0, 1},
	{ 0, 0, 1, 1, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent7 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 1, 1, 1, 1, 0, 0},
	{ 1, 1, 1, 2, 1, 0, 1},
	{ 1, 1, 1, 0, 1, 0, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}

local areaEvent8 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 1, 1, 1, 2, 1, 1, 1},
	{ 1, 1, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}

local areaEvent9 = {
	{ 0, 0, 0, 0, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 1, 1, 1, 2, 1, 1, 1},
	{ 1, 1, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}

local areaEvent10 = {
	{ 0, 0, 0, 0, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 0, 1, 1, 0},
	{ 1, 0, 1, 2, 1, 1, 1},
	{ 1, 0, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent11 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 1, 1, 0},
	{ 1, 0, 1, 2, 1, 1, 1},
	{ 1, 0, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent12 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 1, 0, 0},
	{ 1, 0, 1, 2, 1, 0, 1},
	{ 1, 0, 1, 0, 1, 0, 1},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent13 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 1, 1, 1, 1, 0, 0},
	{ 1, 1, 1, 2, 1, 0, 1},
	{ 1, 1, 1, 0, 1, 0, 1},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}

local areaEvent14 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 1, 1, 1, 2, 1, 1, 1},
	{ 1, 1, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}

local areaEvent15 = {
	{ 0, 0, 0, 0, 0, 0, 0},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 1, 1, 1, 2, 1, 1, 1},
	{ 1, 1, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 0, 0, 0}
}

local areaEvent16 = {
	{ 0, 0, 0, 0, 0, 0, 0},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 0, 0, 1, 0, 1, 1, 0},
	{ 1, 0, 1, 2, 1, 1, 1},
	{ 1, 0, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent17 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 1, 1, 0},
	{ 1, 0, 1, 2, 1, 1, 1},
	{ 1, 0, 1, 1, 1, 1, 1},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent18 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 1, 0, 0},
	{ 1, 0, 1, 2, 1, 0, 1},
	{ 1, 0, 1, 0, 1, 0, 1},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent19 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 1, 1, 1, 1, 1, 0},
	{ 0, 0, 1, 1, 1, 0, 0},
	{ 0, 0, 1, 2, 1, 0, 0},
	{ 0, 0, 1, 0, 1, 0, 0},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

local areaEvent20 = {
	{ 0, 0, 1, 1, 0, 0, 0},
	{ 0, 0, 0, 1, 0, 0, 0},
	{ 0, 0, 1, 1, 1, 0, 0},
	{ 0, 0, 1, 2, 1, 0, 0},
	{ 0, 0, 1, 0, 1, 0, 0},
	{ 0, 1, 1, 0, 1, 1, 0},
	{ 0, 0, 0, 0, 0, 0, 0}
}

combat:setArea(createCombatArea(area))

function onGetFormulaValues(player, level, magicLevel)
	local min = (level / 5) + (magicLevel * 3.2) + 20
	local max = (level / 5) + (magicLevel * 5.4) + 40
	return min, max
end

combat:setCallback(CALLBACK_PARAM_LEVELMAGICVALUE, "onGetFormulaValues")

local spell = Spell(SPELL_RUNE)

function spell.onCastSpell(creature, variant, isHotkey)
	return combat:execute(creature, variant)
end

spell:name("test rune")
spell:runeId(2275)
spell:id(220)
spell:level(20)
spell:magicLevel(5)
spell:needTarget(true)
spell:isAggressive(false)
spell:allowFarUse(true)
spell:charges(25)
spell:vocation("sorcerer;true", "master sorcerer")
spell:register()

local conjureRune = Spell(SPELL_INSTANT)

function conjureRune.onCastSpell(creature, variant)
	return combat:execute(creature, variant)
end

conjureRune:name("Test")
conjureRune:id(221)
conjureRune:words("frigo3")
conjureRune:level(0)
conjureRune:mana(0)
conjureRune:group("support")
conjureRune:soul(0)
conjureRune:isAggressive(false)
conjureRune:cooldown(2000)
conjureRune:groupCooldown(2000)
conjureRune:needLearn(false)
conjureRune:vocation("druid", "master sorcerer")
conjureRune:register()
