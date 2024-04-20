--Q3 - Fix or improve the name and the implementation of the below method

-- Renamed the function to better described what it does.
function kickPlayer(pid) 	   -- removed membername since it is now unused.
	local player = Player(pid) -- Keep the player in local scope.
	local party = player:getParty()
	party:removeMember(player) -- party removeMember handles verifing if they are in the party, and removes them if they are.
	
	--[[	
		for k,v in pairs(party:getMembers()) do
			if v == player then -- Player(pid), and Player(membername) should be the same result so replaced with locally stored player.
				party:removeMember(player)
			end
		end
	--]]
end
