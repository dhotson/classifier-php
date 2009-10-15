<?php

require_once 'bayes.php';

// From http://www.igvita.com/2007/05/23/bayes-classification-in-ruby/
$classifier = new Bayes('funny','not funny');

$classifier->train('funny', "Peter: Oh my god, Brian, there's a message in my Alphabits. It says, 'Oooooo.' Brian: Peter, those are Cheerios. ");
$classifier->train('funny', "Lois: You're drunk again. Peter: No, I'm just exhausted 'cause I've been up all night drinking. ");
$classifier->train('funny', "Peter: Whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa, whoa. Lois, this isn't my Batman glass");
$classifier->train('funny', "Peter: Lois, um, go get the medical dictionary and look up 'fork' and 'lung.' Lois: Why? Peter: Time is a factor, Lois. ");

$classifier->train('not funny', "Brian: You're drunk. Stewie: You're sexy.");
$classifier->train('not funny', "Stewie: Well, I'd love to stay and chat, but you're a total bitch.");
$classifier->train('not funny', "Peter: A guy at work bought a car out of the paper. Ten years later, Bam! Herpes.");
$classifier->train('not funny', "Peter: Okay, okay, I have an idea. I'll be Charlie and you could all be my angels. (Turns to look at an ugly woman) Except for you, you be Bosley.");

// Let's classify some new quotes
echo $classifier->classify("Peter: A boat's a boat but a box could be anything! It could even be a boat!")."\n";
echo $classifier->classify("Stewie: Damn you ice cream, come to my mouth! How dare you disobey me!")."\n";
echo $classifier->classify("Brian: I could take my sweater off too, but I think it's attached to my skin. ")."\n";
echo $classifier->classify("Peter: Hey, anybody got a quarter? Bill Gates: What's a quarter? ")."\n";
echo $classifier->classify("Peter: I had such a crush on her. Until I met you Lois. You're my silver medal. ")."\n";
echo $classifier->classify("Meg: Excuse me, Mayor West? Adam West: How do you know my language? ")."\n";
echo $classifier->classify("Meg: You could kill all the girls who are prettier than me. Death: Well, that would just leave England. ")."\n";

