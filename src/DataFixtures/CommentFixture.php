<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\Comment;
use App\Entity\CommentThread;
use App\Entity\ReadComment;

use Faker\Factory;
class CommentFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
          $faker = Factory::create();
        // create 10 users
        for($i=0; $i<10; $i++) {
               $user[$i] = new User();
               $user[$i]->setEmail($faker->email);
               $manager->persist($user[$i]);
         }
         $manager->flush();
        // create 20 CommentThread
        for($i=0; $i<20; $i++) {
               $commentThread[$i] = new CommentThread();
               $commentThread[$i]->setCreatedAt($faker->dateTimeBetween('-1 months', '-1 seconds'));
               $manager->persist($commentThread[$i]);
         }
        $manager->flush();
        // create 100 comments
        for($i=0; $i<100; $i++) {
               $comment[$i] = new Comment();
               $comment[$i]->setCreatedAt($faker->dateTimeBetween('-1 months', '-1 seconds'));
               $comment[$i]->setBody($faker->text);
               $comment[$i]->setUser($user[$faker->numberBetween(0,9)]);
               $comment[$i]->setCommentThread($commentThread[$faker->numberBetween(0,19)]);
               $manager->persist($comment[$i]);
         }
        $manager->flush();
        // create 50 readComment

        for($i=0; $i<50; $i++) {
               $readComment[$i] = new ReadComment();
               $readComment[$i]->setReadAt($faker->dateTimeBetween('-1 months', '-1 seconds'));
               $readComment[$i]->setUser($user[$faker->numberBetween(0,9)]);
               $readComment[$i]->setComment($comment[$faker->numberBetween(0,99)]);
               $manager->persist($readComment[$i]);
         }
        $manager->flush();



     }
}
