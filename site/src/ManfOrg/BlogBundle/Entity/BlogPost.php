<?php

namespace ManfOrg\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//information node //evenly should be blog post

/**
 * @ORM\Entity
 * @ORM\Table(name="blog_posts")
 */
class BlogPost {
  //put your code here

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
  //protected $attachments;
  
  /**
   *
   * @ORM\Column(type="text")
   */
  protected $header;
  
  /**
   *
   * @ORM\Column(type="text")
   */
  protected $text;
  
  /**
   * @ORM\Column(type="datetime")
   *
   */
  protected $created;

  /**
   * @ORM\Column(type="datetime")
   *
   */
  protected $modified;
  
}

?>
