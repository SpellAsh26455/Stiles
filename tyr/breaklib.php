<?php

/**
* For Breakout Clone
*/
class breaklib 
{
	public function startPreload()
	{
			return "var mainState = {  
    preload: function() {  
    	game.load.crossOrigin = 'anonymous';";
	}

	public function loadImg($a,$b)
	{
		return "
		game.load.image('".$a."', '".$b."');";
	}
	public function endFunction()
	{
		return "},";
	}
	public function startCreate()
	{
		return " create: function() {
			game.physics.startSystem(Phaser.Physics.ARCADE);
			game.world.enableBody = true;
			";
	}
	public function setBg($x,$y,$a)
	{
		return "game.add.sprite(0, 0, 'sky');";
	}
	public function enableLeft()
	{
		return "this.left = game.input.keyboard.addKey(Phaser.Keyboard.LEFT);";
	}
	public function enableRight()
	{
		return "this.right = game.input.keyboard.addKey(Phaser.Keyboard.RIGHT);";
	}
	public function setPaddle($a,$b)
	{
		return "this.paddle = game.add.sprite(".$a.", ".$b.", 'paddle');";
	}
	public function paddleImo($a)
	{
		return "this.paddle.body.immovable =".$a."true;";
	}
	public function setBricks($c,$r,$i)
	{
		return "
		this.bricks = game.add.group();
		for (var i = 0; i < ".$c."; i++) {
        for (var j = 0; j < ".$r."; j++) {
            // Create the brick at the correct position
            var brick = game.add.sprite(55+i*60, 55+j*35, 'brick');

            // Make sure the brick won't move when the ball hits it
            brick.body.immovable = ".$i.";

            // Add the brick to the group
            this.bricks.add(brick);
        }
    }";
	}
	public function setBall()
	{
		return "this.ball = game.add.sprite(200, 300, 'ball');";
	}
	public function setBallVelocity($x,$y)
	{
		return "this.ball.body.velocity.x = ".$x.";
    this.ball.body.velocity.y = ".$y.";";
	}	
	public function setBallBounce($a)
	{
		return "this.ball.body.bounce.setTo(".$a."); 
    this.ball.body.collideWorldBounds = true;";
	}
	public function startUpdate()
	{
		return "update: function() { ";
	}
	public function leftdown($a)
	{
		return "if (this.left.isDown) this.paddle.body.velocity.x = ".$a.";";
	}
	public function rightdown($a)
	{
		return "else if (this.right.isDown) this.paddle.body.velocity.x = ".$a.";
		else this.paddle.body.velocity.x = 0;  ";
	}
	public function collidepb()
	{
		return "game.physics.arcade.collide(this.paddle, this.ball);";
	}
	public function collidebb()
	{
		return "game.physics.arcade.collide(this.ball, this.bricks, this.hit, null, this);";
	}
	public function restart()
	{
		return "if (this.ball.y > this.paddle.y)
        game.state.start('main');  
    ";
	}
	public function killb()
	{
		return "hit: function(ball, brick) {  
    brick.kill();
	},";
	}
	
	public function initgame()
	{
		return "
	};
		var game = new Phaser.Game(400, 450, Phaser.AUTO, 'snakes');  
game.state.add('main', mainState);  
game.state.start('main');";
	}
}

?>