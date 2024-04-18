
--Q1 - Fix or improve the implementation of the below methods

local function releaseStorage(player)

	player:setStorageValue(1000, -1)
	
end

-- Making the function local.  Assuming the should not be in the global scope.
local function onLogout(player)

	if player:getStorageValue(1000) == 1 then
		addEvent(releaseStorage, 1000, player)
	end
	
	return true
end
