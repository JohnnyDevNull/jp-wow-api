<!DOCTYPE html>
<html>
    <head><meta charset="UTF-8"><title>jpWoW Api Examples</title></head>
    <body style="font-size: 10px; font-family: Arial">
		<?php

		include_once './wow/region.php';
		include_once './wow.php';

		$region = new jpWoWRegion('europe', 'de_DE');
		$wow = new jpWoW($region);

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
		<p>Api-Test-Calls:<br><br>
			<?php

			//var_dump($wow->getAchievment(2144));
			//var_dump($wow->getAuction($realm));
			//var_dump($wow->getBattlePetAbility(640));
			//var_dump($wow->getBattlePetSpecies(258));
			//var_dump($wow->getBattlePetStats(258,25,5,4))

			//var_dump($wow->getChallangeMode($realm));
			//var_dump($wow->getCharacter($charName, $realm));
			//var_dump($wow->getCharacterAllFields($charName, $realm));
			//var_dump($wow->getCharacterAchievements($charName, $realm));
			//var_dump($wow->getCharacterAppearance($charName, $realm));
			//var_dump($wow->getCharacterFeed($charName, $realm));
			//var_dump($wow->getCharacterGuild($charName, $realm));
			//var_dump($wow->getCharacterHunterPets($charName, $realm));
			//var_dump($wow->getCharacterItems($charName, $realm));
			//var_dump($wow->getCharacterMounts($charName, $realm));
			//var_dump($wow->getCharacterPets($charName, $realm));
			//var_dump($wow->getCharacterPetSlots($charName, $realm));
			//var_dump($wow->getCharacterProfessions($charName, $realm));
			//var_dump($wow->getCharacterProgression($charName, $realm));
			//var_dump($wow->getCharacterPvp($charName, $realm));
			//var_dump($wow->getCharacterQuests($charName, $realm));
			//var_dump($wow->getCharacterReputation($charName, $realm));
			//var_dump($wow->getCharacterStats($charName, $realm));
			//var_dump($wow->getCharacterTalents($charName, $realm));
			//var_dump($wow->getCharacterTitles($charName, $realm));
			//var_dump($wow->getCharacterAudit($charName, $realm));

			//var_dump($wow->getItem(18803));
			//var_dump($wow->getItemSet(1060));

			//var_dump($wow->getGuild($guildName, $realm));
			//var_dump($wow->getGuildNews($guildName, $realm));
			//var_dump($wow->getGuildAllFields($guildName, $realm));
			//var_dump($wow->getGuildMembers('$guildName', $realm));
			//var_dump($wow->getGuildNews('$guildName', $realm));
			//var_dump($wow->getGuildChallenge('$guildName', $realm));

			//var_dump($wow->getLeaderboard2v2());
			//var_dump($wow->getLeaderboard3v3());
			//var_dump($wow->getLeaderboard5v5());
			//var_dump($wow->getLeaderboardRbg());

			//var_dump($wow->getQuest(13146));
			//var_dump($wow->getRealmStatus());
			//var_dump($wow->getRecipe(33994));
			//var_dump($wow->getSpell(8056));

			//var_dump($wow->getDataResourceBattlegroups());
			//var_dump($wow->getDataResourceCharacterRaces());
			//var_dump($wow->getDataResourceCharacterClasses());
			//var_dump($wow->getDataResourceCharacterAchievements());
			//var_dump($wow->getDataResourceGuildRewards());
			//var_dump($wow->getDataResourceGuildPerks());
			//var_dump($wow->getDataResourceGuildAchievements());
			//var_dump($wow->getDataResourceItemClasses());
			//var_dump($wow->getDataResourceTalents());
			//var_dump($wow->getDataResourcePetTypes());

			?>
		</p>
    </body>
</html>
