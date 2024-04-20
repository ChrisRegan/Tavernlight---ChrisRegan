-- The addEvent was wrong as it needed to send a player ID as addEvent does not work with objects.
-- Though it will still not work because the delay will push past the lifetime of the player.
local function releaseStorage(pid)

	local player = Player(pid) 
	if player ~= nil then	   
		player:setStorageValue(1000, -1)	
	end	
end

function onLogout(player)
	-- It is unknown if the id 1000 can be any other number besides 1 and -1 so keeping the check.
	if player:getStorageValue(1000) == 1 then 
		--addEvent(releaseStorage, 1000, player:getId())	-- deleting this event since the player will no longer exist by the time it runs.
		player:setStorageValue(1000, -1)	
	end
	
	return true
end
