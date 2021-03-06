var mainState = {
    preload: function() { game.load.image('pipe', 'assets/pipe.png');game.load.image('bird', 'assets/bird.png');game.load.image('sky', 'assets/pbsky.png');},create: function() { 
			game.physics.startSystem(Phaser.Physics.ARCADE);this.bg = game.add.tileSprite(0, 0, 400, 490, 'sky');this.bird = game.add.sprite(100, 245, 'bird');game.physics.arcade.enable(this.bird);this.bird.body.gravity.y = 500;var spaceKey = game.input.keyboard.addKey(
                    Phaser.Keyboard.SPACEBAR);
                    spaceKey.onDown.add(this.jump, this); this.pipes = game.add.group(); 
    this.timer = game.time.events.loop(1100, this.addRowOfPipes, this); this.score = 0;
this.labelScore = game.add.text(20, 20, '0', 
    { font: '30px Comic Sans MS', fill: 'black' }); },update: function() {this.bg.tilePosition.x = 0.5;if (this.bird.y < 0|| this.bird.y >490)
        this.restartGame();game.physics.arcade.overlap(
    this.bird, this.pipes, this.restartGame, null, this);},jump: function() {
    // Add a vertical velocity to the bird
    this.bird.body.velocity.y = -350;
},restartGame: function() {
    // Start the 'main' state, which restarts the game
    game.state.start('main');
},
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
    for (var i = 0; i < 8; i++)
        if (i != hole && i != hole + 1) 
            this.addOnePipe(400, i * 60 + 10);   
},};

// Initialize Phaser, and create a 400px by 490px game
var game = new Phaser.Game(400, 450,Phaser.AUTO,'snakes');

// Add the 'mainState' and call it 'main'
game.state.add('main', mainState); 

// Start the state to actually start the game
game.state.start('main');