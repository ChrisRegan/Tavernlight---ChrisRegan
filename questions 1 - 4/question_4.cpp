

//Q4 - Assume all method calls work fine. Fix the memory leak issue in below method

void Game::addItemToPlayer(const std::string& recipient, uint16_t itemId)
{
	
	Player* player = g_game.getPlayerByName(recipient);

	if (foundPlayer) {
		player = new Player(nullptr);
		if (!IOLoginData::loadPlayerByName(player, recipient)) {
			delete player;	// Delete the newly created player if it failed to prevent a memory leak.
			return;
		}
		g_game.addPlayer(player); // Adds the newly created player to be managed the game to the same place that getPlayerByName retrieves its data.
								  
								 
	}

	Item* item = Item::CreateItem(itemId); 
	if (!item) {
		return;
	}

	// Added an if statement to properly delete the item if internalAddItem fails. 
	// Internal add item stores the pointer for later use.
	if(g_game.internalAddItem(player->getInbox(), item, INDEX_WHEREEVER, FLAG_NOLIMIT) != RETURNVALUE_NOERROR)
	{
		delete item;
	}

	// Could be a new player so save anyways even if additem fails.
	if (player->isOffline()) {
		IOLoginData::savePlayer(player);
	}
	
	
}
