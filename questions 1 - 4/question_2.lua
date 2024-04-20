--Q2 - Fix or improve the implementation of the below method

-- Renamed the function since SmallGuild can be misunderstood as a preset cap.
-- While SmallerGuilds implies a comparison is made with a parameter.
function printSmallerGuildNames(memberCount)
	-- this method is supposed to print names of all guilds that have less than memberCount max members
	local selectGuildQuery = "SELECT name FROM guilds WHERE max_members < %d;"
	local resultId = db.storeQuery(string.format(selectGuildQuery, memberCount))

	-- Guards against if no results were returned.
	if resultId then
		repeat
			-- removed uneeded variable name to reduce memory usage as well as
			-- adding the parameter resultId to get the data.
			print(result.getString(resultId, "name")) 
			-- iterates to the next value in the resulted query until nil.
		until not result.next(resultId) 
	end
	
	-- released the data to prevent memory leak.
	result.free(resultId) 	
end
