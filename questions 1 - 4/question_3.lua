--Q3 - Fix or improve the name and the implementation of the below method

-- Renamed the function to better described what it does as well as removed membername since it is now unused.
-- the player id was kept since strings are generally slower at comparisons than integers.
function kickPlayer(pid) 	   
	-- Keep the player in local scope.
	local player = Player(pid) 
	local party = player:getParty()
	-- party removeMember handles verifing if they are in the party, and removes them if they are.
	party:removeMember(player) 
	
	--[[	
		for k,v in pairs(party:getMembers()) do
			if v == player then -- Player(pid), and Player(membername) should be the same result so replaced with locally stored player.
				party:removeMember(player)
			end
		end
	--]]
end
