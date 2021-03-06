var mainState = {  
    preload: function() {  
    	game.load.crossOrigin = 'anonymous';
		game.load.image('sky', 'assets/pinksky.png');
		game.load.image('paddle', 'assets/paddle.png');
		game.load.image('brick', 'assets/brick.png');
		game.load.image('ball', 'assets/ball.png');}, create: function() {
			game.physics.startSystem(Phaser.Physics.ARCADE);
			game.world.enableBody = true;
			game.add.sprite(0, 0, 'sky');this.left = game.input.keyboard.addKey(Phaser.Keyboard.LEFT);this.right = game.input.keyboard.addKey(Phaser.Keyboard.RIGHT);this.paddle = game.add.sprite(200, 400, 'paddle');this.paddle.body.immovable =;
		this.bricks = game.add.group();
		for (var i = 0; i < 5; i++) {
        for (var j = 0; j < 6; j++) {
            // Create the brick at the correct position
            var brick = game.add.sprite(55+i*60, 55+j*35, 'brick');

            // Make sure the brick won't move when the ball hits it
            brick.body.immovable = 1;

            // Add the brick to the group
            this.bricks.add(brick);
        }
    }this.ball = game.add.sprite(200, 300, 'ball');this.ball.body.velocity.x = ;
    this.ball.body.velocity.y = ;this.ball.body.bounce.setTo(1); 
    this.ball.body.collideWorldBounds = true;},update: function() { if (this.left.isDown) this.paddle.body.velocity.x = ;else if (this.right.isDown) this.paddle.body.velocity.x = ;
		else this.paddle.body.velocity.x = 0;  game.physics.arcade.collide(this.paddle, this.ball);game.physics.arcade.collide(this.ball, this.bricks, this.hit, null, this);if (this.ball.y > this.paddle.y)
        game.state.start('main');  
    },hit: function(ball, brick) {  
    brick.kill();
	},
	};
		var game = new Phaser.Game(400, 450, Phaser.AUTO, 'snakes');  
game.state.add('main', mainState);  
game.state.start('main');