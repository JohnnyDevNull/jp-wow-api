<!DOCTYPE html>
<html>
    <head><meta charset="UTF-8"><title>jpWoW Api Examples</title></head>
    <body style="font-size: 10px; font-family: Arial">
		<?php

		include_once './wow/region.php';
		include_once './wow.php';

		$region = new jpWoWRegion('europe', 'de_DE');
		$wow = new jpWoW($region);
		$wow->setApiKey('Your API Key');

		$charName = "Your character name";
		$realm = "Your realm name";
		$guildName = 'Your guild name';

		?>
		<p>Region: <?=$region->getRegion()?></p>
		<p>Host: <?=$region->getHost()?></p>
		<p>Locale: <?=$region->getLocale()?></p>
		<p>Alpha2: <?=$region->getAlpha2()?></p>
		<p>Subdom: <?=$region->getRegionSubdomain()?></p>
		<p>RenderPath: <?=$wow->getStaticRenderPath()?></p>
		<p>IconsPath 18: <?=$wow->getIconsPath(18)?></p>
		<p>IconsPath 36: <?=$wow->getIconsPath(36)?></p>
		<p>IconsPath 56: <?=$wow->getIconsPath(56)?></p>
		<br>
		<p>Api-Test-Calls:<br><br><pre>
			<?php

			//print_r($wow->getAchievment(2144));
			//print_r($wow->getAuction($realm));
			//print_r($wow->getBattlePetAbility(640));
			//print_r($wow->getBattlePetSpecies(258));
			//print_r($wow->getBattlePetStats(258,25,5,4))

			//print_r($wow->getChallangeMode($realm));
			print_r($wow->getCharacter($charName, $realm));
			//print_r($wow->getCharacterAllFields($charName, $realm));
			//print_r($wow->getCharacterAchievements($charName, $realm));
			//print_r($wow->getCharacterAppearance($charName, $realm));
			//print_r($wow->getCharacterFeed($charName, $realm));
			//print_r($wow->getCharacterGuild($charName, $realm));
			//print_r($wow->getCharacterHunterPets($charName, $realm));
			//print_r($wow->getCharacterItems($charName, $realm));
			//print_r($wow->getCharacterMounts($charName, $realm));
			//print_r($wow->getCharacterPets($charName, $realm));
			//print_r($wow->getCharacterPetSlots($charName, $realm));
			//print_r($wow->getCharacterProfessions($charName, $realm));
			//print_r($wow->getCharacterProgression($charName, $realm));
			//print_r($wow->getCharacterPvp($charName, $realm));
			//print_r($wow->getCharacterQuests($charName, $realm));
			//print_r($wow->getCharacterReputation($charName, $realm));
			//print_r($wow->getCharacterStats($charName, $realm));
			//print_r($wow->getCharacterTalents($charName, $realm));
			//print_r($wow->getCharacterTitles($charName, $realm));
			//print_r($wow->getCharacterAudit($charName, $realm));

			//print_r($wow->getItem(18803));
			//print_r($wow->getItemSet(1060));

			//print_r($wow->getGuild($guildName, $realm));
			//print_r($wow->getGuildNews($guildName, $realm));
			//print_r($wow->getGuildAllFields($guildName, $realm));
			//print_r($wow->getGuildMembers('$guildName', $realm));
			//print_r($wow->getGuildNews('$guildName', $realm));
			//print_r($wow->getGuildChallenge('$guildName', $realm));

			//print_r($wow->getLeaderboard2v2());
			//print_r($wow->getLeaderboard3v3());
			//print_r($wow->getLeaderboard5v5());
			//print_r($wow->getLeaderboardRbg());

			//print_r($wow->getQuest(13146));
			//print_r($wow->getRealmStatus());
			//print_r($wow->getRecipe(33994));
			//print_r($wow->getSpell(8056));

			//print_r($wow->getDataResourceBattlegroups());
			//print_r($wow->getDataResourceCharacterRaces());
			//print_r($wow->getDataResourceCharacterClasses());
			//print_r($wow->getDataResourceCharacterAchievements());
			//print_r($wow->getDataResourceGuildRewards());
			//print_r($wow->getDataResourceGuildPerks());
			//print_r($wow->getDataResourceGuildAchievements());
			//print_r($wow->getDataResourceItemClasses());
			//print_r($wow->getDataResourceTalents());
			//print_r($wow->getDataResourcePetTypes());

			?>
		</pre></p>
    </body>
</html>
