<?php

/**
*/
class lib3 
{
	
	public function start()
	{
		return "var mainState = {
    preload: function() { ";
	}
	public function setImage($imgname,$imgurl)
	{
		return "game.load.image('".$imgname."', '".$imgurl."');";
	}
	public function endPreload()
	{
		return "},";
	}
	public function startCreate()
	{
		return "create: function() { 
			game.physics.startSystem(Phaser.Physics.ARCADE);";
	}
	public function addBgRepeat($value)
	{
		return "this.bg = game.add.tileSprite(0, 0, 400, 490, '".$value."');";
	}
	public function addP($value)
	{
		return "this.bird = game.add.sprite(100, 245, '".$value."');";
	}
	public function enablePhysicsOn($value)
	{
		return "game.physics.arcade.enable(this.".$value.");";
	}
	public function allowgravityY($value)
	{
		return "this.bird.body.gravity.y = ".$value.";";
	}
	public function allowSpaceKey()
	{
		return "var spaceKey = game.input.keyboard.addKey(
                    Phaser.Keyboard.SPACEBAR);
                    spaceKey.onDown.add(this.jump, this); ";
	}
	public function addPipes($space)
	{
		return "this.pipes = game.add.group(); 
    this.timer = game.time.events.loop(".$space.", this.addRowOfPipes, this); ";
	}
	public function addScore($size,$face,$color)
	{
		return "this.score = 0;
this.labelScore = game.add.text(20, 20, '0', 
    { font: '".$size."px ".$face."', fill: '".$color."' });" ;
	}
	public function endCreate()
	{
		return " },";
	}
	public function startUpdate()
	{
		return "update: function() {";
	}
	public function addBgRepeat2()
	{
		return "this.bg.tilePosition.x = 0.5;";
	}
	public function gameover($value1,$value2)
	{
		return "if (this.bird.y < ".$value1. "|| this.bird.y >" .$value2.")
        this.restartGame();";
	}
	public function overlap($a,$b,$f)
	{
		return "game.physics.arcade.overlap(
    this.".$a.", this.".$b.", this.".$f.", null, this);";
	}
	public function endUpdate()
	{
		return "},";
	}

	public function jump($value)
	{
		return "jump: function() {
    // Add a vertical velocity to the bird
    this.bird.body.velocity.y = ".$value.";
},";
	}
	public function restart()
	{
		return "restartGame: function() {
    // Start the 'main' state, which restarts the game
    game.state.start('main');
},";
	}

	public function pipe($a)
	{
		return "
		addOnePipe: function(x, y) {
    // Create a pipe at the position x and y
    var pipe = game.add.sprite(x, y, 'pipe');

    // Add the pipe to our previously created group
    this.pipes.add(pipe);

    // Enable physics on the pipe 
    game.physics.arcade.enable(pipe);

    // Add velocity to the pipe to make it move left
    pipe.body.velocity.x = -200; 

    // Automatically kill the pipe when it's no longer visible 
    pipe.checkWorldBounds = true;
    pipe.outOfBoundsKill = true;
},
		addRowOfPipes: function() {
    // Randomly pick a number between 1 and 5
    // This will be the hole position
    var hole = Math.floor(Math.random() * 5) + 1;
    this.score += 1;
this.labelScore.text = this.score;  

    // Add the 6 pipes 
    // With one big hole at position 'hole' and 'hole + 1'
    for (var i = 0; i < ".$a."; i++)
        if (i != hole && i != hole + 1) 
            this.addOnePipe(400, i * 60 + 10);   
},";
	}
	public function end()
	{
		return "};

// Initialize Phaser, and create a 400px by 490px game
var game = new Phaser.Game(400, 490,Phaser.AUTO,'snakes');

// Add the 'mainState' and call it 'main'
game.state.add('main', mainState); 

// Start the state to actually start the game
game.state.start('main');";
	}
}
//Written By Katyani Mehra and Mahdi Lalani
?>