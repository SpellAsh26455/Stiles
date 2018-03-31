<?php

/**
* For EatTheStars
*/
class eatstarlib
{
    public function hello()
    {
        return "var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'myPhaser', { preload: preload, create: create,update: update });";
    }

    public function startpreload()
    {
        return "function preload() {

        ";
    }
    public function setImage($imgname,$imgurl)
    {
        return "game.load.image('".$imgname."', '".$imgurl."');";
    }
    
    public function setImageSprite($c1,$c2,$c3,$c4)
    {
        return "game.load.spritesheet('".$c1."', '".$c2."', ".$c3.", ".$c4.");";
    }
    public function endPreload()
    {
        return "}";

    }
    public function setVariables()
    {
        return "var player;
        var platforms;
        var cursors;

        var stars;
        var score = 0;
        var scoreText;";
    }

    public function startCreate()
    {
        return "function create() {

    //  We're going to be using physics, so enable the Arcade Physics system
    game.physics.startSystem(Phaser.Physics.ARCADE);

    //  A simple background for our game
    game.add.sprite(0, 0, 'sky');";
    }

    public function endFunction()
    {
        return "}";
    }

    public function startUpdate()
    {
        return "function update() {";
    }
    public function addPlatforms()
    {
        return "platforms = game.add.group();

    //  We will enable physics for any object that is created in this group
    platforms.enableBody = true;

    // Here we create the ground.
    var ground = platforms.create(0, game.world.height - 64, 'ground');

    //  Scale it to fit the width of the game (the original sprite is 400x32 in size)
    ground.scale.setTo(2, 2);

    //  This stops it from falling away when you jump on it
    ground.body.immovable = true;

    //  Now let's create two ledges
    var ledge = platforms.create(400, 400, 'ground');
    ledge.body.immovable = true;

    ledge = platforms.create(-150, 250, 'ground');
    ledge.body.immovable = true;";
    }
    public function addPlayer($a)
    {
        return "player = game.add.sprite(32, game.world.height - 150, 'dude');

    //  We need to enable physics on the player
    game.physics.arcade.enable(player);

    //  Player physics properties. Give the little guy a slight bounce.
    player.body.bounce.y = 0.2;
    player.body.gravity.y = ".$a.";
    player.body.collideWorldBounds = true;

    //  Our two animations, walking left and right.
    player.animations.add('left', [0, 1, 2, 3], 10, true);
    player.animations.add('right', [5, 6, 7, 8], 10, true);";
    }
    public function addStars($a,$b,$c)
    {
        return "//  Finally some stars to collect
    stars = game.add.group();

    //  We will enable physics for any star that is created in this group
    stars.enableBody = true;

    //  Here we'll create 12 of them evenly spaced apart
    for (var i = 0; i < ".$a."; i++)
    {
        //  Create a star inside of the 'stars' group
        var star = stars.create(i * ".$c.", 0, 'star');

        //  Let gravity do its thing
        star.body.gravity.y = ".$b.";

        //  This just gives each star a slightly random bounce value
        star.body.bounce.y = 0.7 + Math.random() * 0.2;
    }";
    }
    
    public function createScore()
    {
        return "scoreText = game.add.text(16, 16, 'score: 0', { fontSize: '32px', fill: '#000' });";
    }

    public function allowCursors()
    {
        return "cursors = game.input.keyboard.createCursorKeys();";
    }
    public function allowCollide()
    {
        return "game.physics.arcade.collide(player, platforms);
    game.physics.arcade.collide(stars, platforms);";
    }
    public function allowOverlap()
    {
        return "//  Checks to see if the player overlaps with any of the stars, if he does call the collectStar function
    game.physics.arcade.overlap(player, stars, collectStar, null, this);";
    }
    public function setVelocity()
    {
        return "//  Reset the players velocity (movement)
    player.body.velocity.x = 0;";
    }
    public function setCursors($a,$b,$c)
    {
        return "
        if (cursors.left.isDown)
    {
        //  Move to the left
        player.body.velocity.x =".$a.";

        player.animations.play('left');
    }
    else if (cursors.right.isDown)
    {
        //  Move to the right
        player.body.velocity.x = ".$b.";

        player.animations.play('right');
    }
    else
    {
        //  Stand still
        player.animations.stop();

        player.frame = 4;
    }
    
    //  Allow the player to jump if they are touching the ground.
    if (cursors.up.isDown && player.body.touching.down)
    {
        player.body.velocity.y = ".$c.";
    }";
    }

    public function killS($a)
    {
        return "function collectStar (player, star) {
    
    // Removes the star from the screen
    star.kill();

    //  Add and update the score
    score += ".$a.";
    scoreText.text = 'Score: ' + score;

}";
    }
}
?>