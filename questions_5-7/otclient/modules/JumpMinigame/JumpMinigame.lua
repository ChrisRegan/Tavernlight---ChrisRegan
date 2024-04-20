
JumpMinigameWindow       = nil	-- The UI window that contains the entirety of the jump minigame.
JumpMinigameButton       = nil	-- Button to activate the jump minigame
local moveEvent 		 = nil 	-- Timer used as an update loop to move the jump button.
local Padding 			 = 15	-- Offset padding of the ui in order to keep the jump button within the correct range of the UI
local speed 			 = 0.75	-- Speed of the jump Button

--  resetJump is a function that is called either when the jump button is hit or it gets the the left edge of the parent element.
function resetJump()
	local jumpRect = jumpButton:getRect()		-- Rectangle values of the jumpButton.
	local pRect = JumpMinigameWindow:getRect()	-- Rectangle values of the parent element.
	
	-- Coordinate position of the jump window is set to the top left corner of the element. 
	-- So the jump.height + padding is set for the highest point of parent element. 
	local minHeight = jumpRect.height + Padding
	
	-- the parent height should bring the jump button to the bottom of the UI offset by the jump button height and padding to 
	-- keep it within range.
	local maxHeight = pRect.height-(jumpRect.height+Padding)
	
	
	-- Similar to max height except for the x value.  Since the starting position is on the right side need to get the width of the parent element
	-- But subtract it by the width of the jump button with padding to reset it on the right edge.
	local pos = {x = pRect.x + pRect.width - (jumpRect.width+Padding), 
	y = pRect.y + math.random(minHeight,maxHeight)} -- Randomize the value between the min and max height to change the height, 
													-- than add it to the pos.y to keep the jump button position even if the 
													-- window has moved.
						
	-- Set the new position fo the jump button and update the layout in the parent.						
	jumpButton:setPosition(pos)
	jumpButton:updateParentLayout()
end


-- JumpMoveLeft is the update loop of the jumpButton.
function JumpMoveLeft()
	local pRect = JumpMinigameWindow:getRect()
	local jumpRect = jumpButton:getRect()
	local dt = os.time() - timeNow
	timeNow = os.time()
	
	-- moves the jump button to the left.
	local pos = {x = jumpRect.x-speed, y = jumpRect.y} 
	if pRect.x + Padding < pos.x then
		jumpButton:setPosition(pos)
		jumpButton:updateParentLayout()
	else
		resetJump()
	end

end

-- general function to show the toggle of the jump minigame in the top right corner when the game is connected.
function online()
   JumpMinigameButton:show()
end


-- Initializes and stores the required UI elements. as well as sets the seed for the changing spawn height of the jump minigame.
function init()
  connect(g_game, { onGameStart = online,
                    onGameEnd   = resetWindow })
	
	JumpMinigameWindow = g_ui.displayUI('JumpMinigame')
	JumpMinigameWindow:hide()
	-- prevents the game from moving to prevent accidental drags when trying to hit the button.
	JumpMinigameWindow:setDraggable(false)
  
	-- Added a button to the top right of the screen to get easy access to the module.
	-- It is set to be disabled when not logged in as that seemed to be convention looking at the other modules on the client.
	JumpMinigameButton = modules.client_topmenu.addRightGameToggleButton('JumpMinigame', tr('Jump'), '/images/topbuttons/spelllist', toggle)
	JumpMinigameButton:setOn(false)

	
	jumpButton 			= JumpMinigameWindow:getChildById('JumpButton')
	math.randomseed(os.time()) 
	
  if g_game.isOnline() then
	resetJump()	
    online()
  end
end


-- Unloads the module.  stopping the update loop, as well as destroying the ui windows.
function terminate()
  disconnect(g_game, { onGameStart = online,
                       onGameEnd   = resetWindow })
					   
  JumpMinigameWindow:destroy()
  JumpMinigameButton:destroy()
  
	if moveEvent ~= nil then
		moveEvent:cancel()
		moveEvent = nil
		timeNow = nil
	end

end

-- Toggles the JumpMinigame window to enable / disable the update loop as well as the game window.
function toggle()
  if JumpMinigameButton:isOn() then
	-- Closes the minigame window and stops the update loop.
	if moveEvent ~= nil then
		moveEvent:cancel()
		moveEvent = nil
		timeNow = nil
	end
    JumpMinigameButton:setOn(false)
    JumpMinigameWindow:hide()
	resetJump()
  else
	-- prevents scheduling a duplicate update loop if it somehow wasnt canceled when it makes it to this point.
	if moveEvent == nil then
		timeNow = os.time()
		moveEvent = cycleEvent(JumpMoveLeft, 5) -- Starts the update loop when the game opens.
	end
	
	-- Shows the window of the minigame.
    JumpMinigameButton:setOn(true)
    JumpMinigameWindow:show()
    JumpMinigameWindow:raise()
    JumpMinigameWindow:focus()
  end
end

-- Cancel the timer event and reset the state of the game when unloaded or exiting the game.
function resetWindow()
	
if moveEvent ~= nil then
	moveEvent:cancel()
	moveEvent = nil
	timeNow = nil
end

  JumpMinigameWindow:hide()
  JumpMinigameButton:setOn(false)
  resetJump()
end
