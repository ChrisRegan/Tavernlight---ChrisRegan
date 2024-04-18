--Q3 - Fix or improve the name and the implementation of the below method

function do_sth_with_PlayerParty(playerId) -- removed membername since it is now unused.
	local player = Player(playerId) -- Keep the player in local scope.
	local party = player:getParty()

	for k,v in pairs(party:getMembers()) do
		if v == player then -- Player(playerId), and Player(membername) should be the same result.
			party:removeMember(player)
		end
	end
end
