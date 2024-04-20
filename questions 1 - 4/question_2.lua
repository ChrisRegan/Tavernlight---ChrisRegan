--Q2 - Fix or improve the implementation of the below method

function printGuildNames(memberCount)
	-- this method is supposed to print names of all guilds that have less than memberCount max members
	local selectGuildQuery = "SELECT name FROM guilds WHERE max_members < %d;"
	local resultId = db.storeQuery(string.format(selectGuildQuery, memberCount))

	repeat
												  -- removed uneeded variable name to reduce memory usage as well as
		print(result.getString(resultId, "name")) -- adding the parameter resultId to get the data.
	until not result.next(resultId) -- iterates to the next value in the resulted query until nil.
	
	result.free(resultId) 	-- released the data to prevent memory leak.
end
