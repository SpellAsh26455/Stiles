<?php

/**
* //for Custom
*/
class lib4
{
	public function start()
	{
		return "var mainState = {
    preload: function() { 
    	game.load.image('bullet', 'assets/bullet1.png');
    	";
	}
	public function end($x,$y)
	{
		return "
	};
		var game = new Phaser.Game(".$x.",". $y.",Phaser.AUTO,'snakes');

// Add the 'mainState' and call it 'main'
game.state.add('main', mainState); 

// Start the state to actually start the game
game.state.start('main');";
	}
	public function endFunction()
	{
		return "
	},";
	}
	public function loadImg($a,$b)
	{
		return "
		game.load.image('".$a."', '".$b."');";
	}
	public function startCreate()
	{
		return "
		create: function() {
			game.physics.startSystem(Phaser.Physics.ARCADE);
			game.world.enableBody = true;";
	}
	public function startUpdate()
	{
		return "
		update: function() { ";
	}
	public function setImage($a,$b,$c,$d,$e)
	{
		return "
		game.add.sprite(".$a.",".$b.",'".$c."').scale.setTo(".$d.",".$e.");";
	}
	public function setSprite($a,$b,$c)
	{
		return "
		this.player=game.add.sprite(".$a.",".$b.",'".$c."');";
	}
	public function loadSprite($a,$b,$c)
	{
		return "
		game.load.spritesheet('dude', '".$a."', ".$b.",".$c." );";
	}
	public function spriteLR()
	{
		return "
		this.player.animations.add('left', [0, 1, 2, 3], 10, true);
    this.player.animations.add('right', [5, 6, 7, 8], 10, true);";
	}
	
	public function createCursorKeys()
	{
		return "
		this.cursors = game.input.keyboard.createCursorKeys();
		this.spacekey=game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);";
	}
	public function moveLRU($a,$b,$c)
	{
		return "
     this.player.body.velocity.x = 0;
    this.player.body.velocity.y = 0;

		if (this.cursors.left.isDown)
    {
        //  Move to the left
        this.player.body.velocity.x = ".$a.";

        this.player.animations.play('left');
    }
    else if (this.cursors.right.isDown)
    {
        //  Move to the right
        this.player.body.velocity.x = ".$b.";

        this.player.animations.play('right');
    }
    else
    {
        this.player.body.velocity.x = 0;
        //  Stand still
        this.player.animations.stop();

        this.player.frame = 4;
        
    }
    
    //  Allow the player to jump if they are touching the ground.
    if (this.cursors.up.isDown )//&& this.player.body.touching.down)
    {
        this.player.body.velocity.y =".$c." ;
        this.player.animations.stop();

        this.player.frame = 4;
        
    }
    ";
	}
	public function allowGravity($a,$b)
	{
		return "
		this.".$a.".body.gravity.y = ".$b.";
        this.".$a.".body.bounce.y = 0.5;  
		";
	}
	public function repeatLeft()
	{
		return "
		this.bg.tilePosition.x = 0.5;
		";
	}
	public function repeatUp()
	{
		return "
		this.bg.tilePosition.y = 0.5;
		";
	}
	public function tileBg($a,$b)
	{
		return "
		this.bg = game.add.tileSprite(0, 0, ".$a.",".$b.", 'sky');";
	}
	public function moveJump($a)
	{
		return "
		if(this.spacekey.isDown){
			this.player.body.velocity.y = ".$a.";
		";
	}
	public function bulletCreate()
	{
		return "
		this.bulletTime=0;
	this.bullets = game.add.group();

    this.bullets.enableBody = true;

    this.bullets.physicsBodyType = Phaser.Physics.ARCADE;

    this.bullets.createMultiple(10000, 'bullet');
    this.bullets.callAll('events.onOutOfBounds.add', 'events.onOutOfBounds', this.resetBullet, this);
    this.bullets.setAll('checkWorldBounds', true);";
	}
	public function resetBullet()
	{
		return "
		 resetBullet :function() {

    this.bullet.kill();

    },";
	}
	public function fireBullet()
	{
		return "
		fireBullet :function () {

    if (game.time.now > this.bulletTime)
    {
        this.bullet = this.bullets.getFirstExists(false);

        if (this.bullet)
        {
            this.bullet.reset(this.player.x+6, this.player.y+8);
            this.bullet.body.velocity.y = -300;
            this.bulletTime = game.time.now + 250;
        }
    }

		},";
	}
	public function shoot()
	{
		return "
        this.fireBullet();
    ";
	}
	public function jumpend()
	{
		return "
	}";
	}
	public function createScore()
	{
		return "
		this.scoreText = game.add.text(16, 16, 'score: 0', { fontSize: '32px', fill: '#000' });";
	}
	public function displayScore()
	{
		return "
		this.scoreText.text = 'Score: ' + score;";
	}
	public function enableScore()
	{
		return "
		this.score=0;
		";
	}
	public function createStars($a,$b,$c,$d,$e)
	{
		return "
		if(this.score==".$c.")
		{
		this.stars = game.add.group();

    //  We will enable physics for any star that is created in this group
    this.stars.enableBody = true;

    //  Here we'll create 12 of them evenly spaced apart
    for (var i = 0; i <".$a."; i++)
    {
        //  Create a star inside of the 'stars' group
        this.star = this.stars.create(i * ".$b.", 0, 'star');

        //  Let gravity do its thing
        this.star.body.gravity.y = ".$d.";

        //  This just gives each star a slightly random bounce value
        this.star.body.bounce.y = 0.7 + Math.random() * 0.2;
        this.star.body.collideWorldBounds = ".$e.";
    }
	}";
	}
	public function worldBounds($a)
	{
		return "
		this.".$a.".body.collideWorldBounds = true;";
	}
	public function createVillans($a,$b,$c,$d,$e)
	{
		return "
		if(this.score==".$c.")
		{
		this.villans = game.add.group();

    //  We will enable physics for any star that is created in this group
    this.villans.enableBody = true;

    //  Here we'll create 12 of them evenly spaced apart
    for (var i = 0; i <".$a."; i++)
    {
        //  Create a star inside of the 'stars' group
        this.villan = this.villans.create(0, i * ".$b.", 'villan');

        //  Let gravity do its thing
        this.villan.body.gravity.x = ".$d.";
        this.villan.body.velocity.x=10;
        this.villan.body.bounce.x = 1 + Math.random() * 0.05;
        this.villan.body.collideWorldBounds = ".$e.";
    }
	}";
	}
	public function collidePlayerStar()
	{
		return "
		game.physics.arcade.overlap(this.player, this.stars, this.collectStar, null, this);";
	}
	public function collectStar($a)
	{
		return "
		collectStar :function(player, star) {
    
    // Removes the star from the screen
    star.kill();

    //  Add and update the score
    this.score += ".$a.";
    this.scoreText.text = 'Score: ' + this.score;

},
";
	}
	public function collideBulletVillan()
	{
		return "
		game.physics.arcade.overlap(this.bullets, this.villans, this.killVillan, null, this);";
	}
	public function killVillan($a)
	{
		return "
		killVillan :function(bullet, villan) {
    
    // Removes the star from the screen
    villan.kill();

    //  Add and update the score
    this.score += ".$a.";
    this.scoreText.text = 'Score: ' + this.score;

},
";
	}
}
?>