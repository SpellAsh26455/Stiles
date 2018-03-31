var mainState = {
    preload: function() { 
    	game.load.image('bullet', 'assets/bullet1.png');
    	
		game.load.image('villan', 'assets/fire1.png');
	},
		create: function() {
			game.physics.startSystem(Phaser.Physics.ARCADE);
			game.world.enableBody = true;
		this.cursors = game.input.keyboard.createCursorKeys();
		this.spacekey=game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
		this.bulletTime=0;
	this.bullets = game.add.group();

    this.bullets.enableBody = true;

    this.bullets.physicsBodyType = Phaser.Physics.ARCADE;

    this.bullets.createMultiple(10000, 'bullet');
    this.bullets.callAll('events.onOutOfBounds.add', 'events.onOutOfBounds', this.resetBullet, this);
    this.bullets.setAll('checkWorldBounds', true);
		this.scoreText = game.add.text(16, 16, 'score: 0', { fontSize: '32px', fill: '#000' });
		this.score=0;
		
		if(this.score==0)
		{
		this.villans = game.add.group();

    //  We will enable physics for any star that is created in this group
    this.villans.enableBody = true;

    //  Here we'll create 12 of them evenly spaced apart
    for (var i = 0; i <1; i++)
    {
        //  Create a star inside of the 'stars' group
        this.villan = this.villans.create(0, i * 60, 'villan');

        //  Let gravity do its thing
        this.villan.body.gravity.x = 300;
        this.villan.body.velocity.x=10;
        this.villan.body.bounce.x = 1 + Math.random() * 0.05;
        this.villan.body.collideWorldBounds = 1;
    }
	}
	},
		update: function() { 
     this.player.body.velocity.x = 0;
    this.player.body.velocity.y = 0;

		if (this.cursors.left.isDown)
    {
        //  Move to the left
        this.player.body.velocity.x = -100;

        this.player.animations.play('left');
    }
    else if (this.cursors.right.isDown)
    {
        //  Move to the right
        this.player.body.velocity.x = 100;

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
        this.player.body.velocity.y =-100 ;
        this.player.animations.stop();

        this.player.frame = 4;
        
    }
    
		if(this.spacekey.isDown){
			this.player.body.velocity.y = -100;
		
        this.fireBullet();
    
	}
		game.physics.arcade.overlap(this.bullets, this.villans, this.killVillan, null, this);
	},
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

		},
		 resetBullet :function() {

    this.bullet.kill();

    },
		killVillan :function(bullet, villan) {
    
    // Removes the star from the screen
    villan.kill();

    //  Add and update the score
    this.score += 1;
    this.scoreText.text = 'Score: ' + this.score;

},

	};
		var game = new Phaser.Game(400,400,Phaser.AUTO,'snakes');

// Add the 'mainState' and call it 'main'
game.state.add('main', mainState); 

// Start the state to actually start the game
game.state.start('main');