<?php
// src/Blogger/BlogBundle/DataFixtures/ORM/BlogFixtures.php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\Blog;

class BlogFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('A day with Symfony');
        $blog1->setCategory('Sport');
        $blog1->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $blog1->setImage('beach.jpg');
        $blog1->setAuthor('dsyph3r');
        $blog1->setTags('symfony2, php, paradise, symblog');
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('The pool on the roof must have a leak');
        $blog2->setCategory('Capital');
        $blog2->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $blog2->setImage('pool_leak.jpg');
        $blog2->setAuthor('Zero Cool');
        $blog2->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $manager->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('Misdirection. What the eyes see');
        $blog3->setCategory('Culture');
        $blog3->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog3->setImage('misdirection.jpg');
        $blog3->setAuthor('Gabriel');
        $blog3->setTags('misdirection, magic, movie, hacking, symblog');
        $manager->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('The grid - A digital frontier');
        $blog4->setCategory('Nature');
        $blog4->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog4->setImage('the_grid.jpg');
        $blog4->setAuthor('Kevin Flynn');
        $blog4->setTags('grid, daftpunk, movie, symblog');
        $manager->persist($blog4);

        $blog5 = new Blog();
        $blog5->setTitle('Racer And The Jailbird');
        $blog5->setCategory('Sport');
        $blog5->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog5->setImage('one_or_zero.jpg');
        $blog5->setAuthor('Gary Winston');
        $blog5->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $manager->persist($blog5);

        $blog6 = new Blog();
        $blog6->setTitle('The works-in-progress sessions');
        $blog6->setCategory('Sport');
        $blog6->setBlog('Sed vitae ante varius ex iaculis blandit non quis felis. Ut vulputate viverra mi non condimentum. Sed lacinia eget urna at venenatis. Mauris quis molestie leo. Phasellus malesuada turpis eu lorem molestie, a ultrices ligula porttitor. Curabitur suscipit, nisi quis faucibus egestas, dolor ipsum vulputate sem, id malesuada tellus diam sit amet felis. Nunc egestas, libero eu tempus auctor, nunc orci ullamcorper dolor, quis cursus dolor neque ac erat.');
        $blog6->setImage('beach.jpg');
        $blog6->setAuthor('Ivan Ilin');
        $blog6->setTags('symfony7, php, paradise, symblog');
        $manager->persist($blog6);

        $blog7 = new Blog();
        $blog7->setTitle('Winner of last year’s');
        $blog7->setCategory('Capital');
        $blog7->setBlog('Praesent at lectus interdum risus venenatis ornare ac ac nisl. Vestibulum sed augue mauris. Pellentesque pretium fermentum leo at molestie. Ut pulvinar tortor nec ex imperdiet vestibulum. Suspendisse eleifend non augue sed malesuada. Praesent bibendum felis vitae cursus egestas. Phasellus at vehicula nunc. Maecenas id lectus ut elit tempor semper.');
        $blog7->setImage('pool_leak.jpg');
        $blog7->setAuthor('Zero Cool');
        $blog7->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $manager->persist($blog7);

        $blog8 = new Blog();
        $blog8->setTitle('You Never Fly Alone');
        $blog8->setCategory('Culture');
        $blog8->setBlog('Donec eu leo nulla. Sed in magna sit amet nibh venenatis porta non in risus. Maecenas pretium eleifend erat. Vivamus dolor ante, sagittis non faucibus id, feugiat at arcu. Pellentesque sit amet lobortis neque. Vestibulum id tincidunt velit. Nunc neque eros, ornare quis sem vitae, pulvinar pharetra nibh. Fusce in molestie leo, eu lacinia diam. Sed sed vehicula leo. Morbi sed luctus magna.');
        $blog8->setImage('misdirection.jpg');
        $blog8->setAuthor('Gabriel');
        $blog8->setTags('misdirection, magic, movie, hacking, symblog');
        $manager->persist($blog8);

        $blog9 = new Blog();
        $blog9->setTitle('TV series - with the first offerings');
        $blog9->setCategory('Nature');
        $blog9->setBlog('Etiam luctus diam in nibh fermentum varius. Phasellus ornare tincidunt consectetur. Integer vitae eros diam. Morbi gravida sodales lectus, a hendrerit tellus ullamcorper id. Mauris est lectus, porta in est ut, blandit porta sapien. Curabitur tincidunt ultrices lobortis. Sed finibus venenatis orci a consectetur. Nullam id faucibus ex.');
        $blog9->setImage('the_grid.jpg');
        $blog9->setAuthor('Kevin Flynn');
        $blog9->setTags('grid, daftpunk, movie, symblog');
        $manager->persist($blog9);

        $blog10 = new Blog();
        $blog10->setTitle('New for 2017');
        $blog10->setCategory('Sport');
        $blog10->setBlog('Praesent placerat massa eget dapibus mattis. Nulla ut sodales nibh, id consequat sem. Cras molestie mollis est a imperdiet. Mauris nec ex a sapien fermentum mattis eget eget dui. Nulla ut sagittis lectus, nec dictum nunc. Donec aliquet, lorem non tempus tincidunt, felis massa convallis leo, a posuere felis velit id nulla. Vivamus nisi enim, pretium vitae nunc ac, sodales convallis magna. Donec massa ligula, faucibus ut porta sit amet, dignissim vel ante.');
        $blog10->setImage('one_or_zero.jpg');
        $blog10->setAuthor('Gary Winston');
        $blog10->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $manager->persist($blog10);

        $blog11 = new Blog();
        $blog11->setTitle('A day with Symfony12');
        $blog11->setCategory('Sport');
        $blog11->setBlog('Integer semper elementum sem sit amet faucibus. Fusce ligula ligula, sodales sit amet arcu vel, tincidunt pulvinar dolor. Ut vel orci dignissim, vehicula mi sed, aliquam diam. In ultricies, dolor et porttitor elementum, nibh lorem fringilla ante, dapibus pharetra turpis erat volutpat ipsum. Nulla facilisi. Aliquam at ultrices mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam et maximus tortor, in eleifend nunc. Nullam a arcu in enim accumsan sodales et in risus. Sed volutpat lectus non velit finibus, blandit rhoncus dui tempus. Suspendisse pharetra sem at vehicula sollicitudin. Aliquam porttitor elementum tincidunt. In arcu risus, pharetra eu mi ut, vestibulum auctor purus. Nullam sem mauris, sagittis in odio sed, mollis ultrices dolor. Curabitur maximus, urna vulputate dapibus viverra, tortor ligula pellentesque dui, in pulvinar massa tellus ut diam.');
        $blog11->setImage('beach.jpg');
        $blog11->setAuthor('Ivan Ilin');
        $blog11->setTags('symfony12, php, paradise, symblog');
        $manager->persist($blog11);

        $blog12 = new Blog();
        $blog12->setTitle('The Infiltration and The Twelve');
        $blog12->setCategory('Capital');
        $blog12->setBlog('Morbi blandit vehicula varius. Vestibulum rhoncus, eros in rutrum maximus, lorem libero rhoncus quam, sed tincidunt metus justo porta nisl. Aliquam nulla nisl, viverra nec rutrum in, cursus id odio. Pellentesque in nisi sollicitudin metus faucibus condimentum. Integer maximus varius metus, ut lacinia diam viverra vitae. Proin ultricies ac ligula sit amet rhoncus. Suspendisse quis elit et justo vestibulum aliquam. Cras nec tortor ligula. Duis ac purus sed elit tincidunt consectetur porttitor vel orci. Nulla laoreet sollicitudin sapien eget condimentum. Integer interdum viverra tincidunt. Sed quam ex, sodales sed augue quis, consectetur luctus nisl. Sed ac ante ac sapien lacinia ultricies in a nisi. Praesent finibus justo eget bibendum finibus. Sed dapibus quis justo a vestibulum. Etiam rutrum fermentum nibh, non ultrices magna volutpat quis.');
        $blog12->setImage('pool_leak.jpg');
        $blog12->setAuthor('Zero Cool');
        $blog12->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $manager->persist($blog12);

        $blog13 = new Blog();
        $blog13->setTitle('The final day includes debates');
        $blog13->setCategory('Culture');
        $blog13->setBlog('Vivamus sit amet ipsum vel orci ullamcorper accumsan. Aliquam dolor purus, feugiat at nisi eu, ornare finibus ipsum. Donec augue ligula, ultrices euismod sagittis a, fringilla non est. Aliquam dignissim magna ante, nec iaculis diam gravida et. Cras vitae velit quis augue semper condimentum vel quis nisl. Cras sagittis nulla at dictum cursus. Praesent vel enim ullamcorper, egestas elit sit amet, egestas augue. Donec nec ex elit. Mauris blandit enim eu neque ultrices, id accumsan ipsum malesuada. Pellentesque dictum euismod sem vel porttitor.');
        $blog13->setImage('misdirection.jpg');
        $blog13->setAuthor('Gabriel');
        $blog13->setTags('misdirection, magic, movie, hacking, symblog');
        $manager->persist($blog13);

        $blog14 = new Blog();
        $blog14->setTitle('The grid - A digital frontier');
        $blog14->setCategory('Nature');
        $blog14->setBlog('Vivamus mi elit, congue vel ullamcorper et, pharetra a neque. Proin dignissim sed turpis quis sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus libero risus, imperdiet a facilisis quis, porta in quam. Cras dictum ligula at varius efficitur. Donec ultricies luctus ligula, nec vestibulum lorem tristique id. In elementum fermentum metus vel euismod.');
        $blog14->setImage('the_grid.jpg');
        $blog14->setAuthor('Kevin Flynn');
        $blog14->setTags('grid, daftpunk, movie, symblog');
        $manager->persist($blog14);

        $blog15 = new Blog();
        $blog15->setTitle('Transformers: The Last Knight');
        $blog15->setCategory('Sport');
        $blog15->setBlog('Quisque venenatis pulvinar diam, ut eleifend dolor auctor eget. Curabitur viverra congue sem ut varius. Maecenas finibus, arcu et cursus fermentum, turpis nibh sollicitudin risus, nec vulputate sem sem id diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque risus sem, tincidunt vitae neque sit amet, ullamcorper consequat ligula. Aenean semper lacus lacinia, iaculis ligula eu, suscipit ipsum. Phasellus pellentesque velit ac leo tincidunt auctor. Mauris ultricies velit sit amet aliquam pellentesque. Ut volutpat magna lacus, vitae faucibus tortor dapibus quis. Morbi lacinia blandit orci, a ornare nisl placerat id. Integer eu congue risus. Curabitur scelerisque congue eleifend. Ut laoreet augue orci, non lacinia risus efficitur ac. Pellentesque non eros non purus scelerisque fringilla.');
        $blog15->setImage('one_or_zero.jpg');
        $blog15->setAuthor('Gary Winston');
        $blog15->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $manager->persist($blog15);

        $blog16 = new Blog();
        $blog16->setTitle('BFI seeks partner to help ');
        $blog16->setCategory('Sport');
        $blog16->setBlog('Phasellus congue ante vitae venenatis sollicitudin. Nunc tincidunt, dolor nec pharetra molestie, eros purus egestas felis, non commodo elit diam at diam. Vivamus gravida est sit amet dolor viverra, vitae feugiat tortor facilisis. Nullam elit dolor, lobortis quis mollis vel, facilisis rutrum orci. Donec bibendum quam libero, a tristique leo feugiat at. Ut vitae ligula molestie, efficitur eros vel, euismod dolor. Sed ut fringilla leo, ut placerat elit. Nunc bibendum, ante ac consectetur gravida, libero metus pulvinar leo, ut blandit metus nisl a dui. Nulla tincidunt turpis mi, a sollicitudin lorem interdum vitae. Etiam blandit facilisis purus eget mollis.');
        $blog16->setImage('beach.jpg');
        $blog16->setAuthor('Ivan Ilin');
        $blog16->setTags('symfony17, php, paradise, symblog');
        $manager->persist($blog16);

        $blog17 = new Blog();
        $blog17->setTitle('India\'s Drishyam Films launches');
        $blog17->setCategory('Capital');
        $blog17->setBlog('Nam rhoncus tellus sit amet ornare pellentesque. Aliquam rutrum ligula in turpis convallis condimentum. Donec eu maximus orci. Phasellus ut turpis convallis, pellentesque dui quis, molestie est. Proin eu urna et enim mollis ullamcorper. Nam eu tincidunt nisl. Donec placerat tortor et semper dignissim. Vivamus eu quam nibh. Fusce pharetra condimentum ligula, ut luctus nulla euismod aliquet. Pellentesque mauris nisl, imperdiet in nunc nec, efficitur elementum sem. Etiam congue justo ac velit eleifend, quis accumsan dui sagittis. Etiam scelerisque id ex a pulvinar.');
        $blog17->setImage('pool_leak.jpg');
        $blog17->setAuthor('Zero Cool');
        $blog17->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $manager->persist($blog17);

        $blog18 = new Blog();
        $blog18->setTitle('We will always be led by our filmmakers');
        $blog18->setCategory('Culture');
        $blog18->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog18->setImage('misdirection.jpg');
        $blog18->setAuthor('Gabriel');
        $blog18->setTags('misdirection, magic, movie, hacking, symblog');
        $manager->persist($blog18);

        $blog19 = new Blog();
        $blog19->setTitle('Netflix acquires world streaming rights');
        $blog19->setCategory('Nature');
        $blog19->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog19->setImage('the_grid.jpg');
        $blog19->setAuthor('Kevin Flynn');
        $blog19->setTags('grid, daftpunk, movie, symblog');
        $manager->persist($blog19);

        $blog20 = new Blog();
        $blog20->setTitle('French film magazine announces free theatrical screenings');
        $blog20->setCategory('Sport');
        $blog20->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog20->setImage('one_or_zero.jpg');
        $blog20->setAuthor('Gary Winston');
        $blog20->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $manager->persist($blog20);

        $blog21 = new Blog();
        $blog21->setTitle('A day with Symfony22');
        $blog21->setCategory('Sport');
        $blog21->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $blog21->setImage('beach.jpg');
        $blog21->setAuthor('dsyph23r');
        $blog21->setTags('symfony22, php, paradise, symblog');
        $manager->persist($blog21);

        $blog22 = new Blog();
        $blog22->setTitle('The pool on the roof must have a leak');
        $blog22->setCategory('Capital');
        $blog22->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $blog22->setImage('pool_leak.jpg');
        $blog22->setAuthor('Zero Cool');
        $blog22->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $manager->persist($blog22);

        $blog23 = new Blog();
        $blog23->setTitle('Vestibulum vulputate mauris eget');
        $blog23->setCategory('Culture');
        $blog23->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog23->setImage('misdirection.jpg');
        $blog23->setAuthor('Gabriel');
        $blog23->setTags('misdirection, magic, movie, hacking, symblog');
        $manager->persist($blog23);

        $blog24 = new Blog();
        $blog24->setTitle('The grid - A digital frontier');
        $blog24->setCategory('Nature');
        $blog24->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog24->setImage('the_grid.jpg');
        $blog24->setAuthor('Kevin Flynn');
        $blog24->setTags('grid, daftpunk, movie, symblog');
        $manager->persist($blog24);

        $blog25 = new Blog();
        $blog25->setTitle('You\'re either a one or a zero. Alive or dead');
        $blog25->setCategory('Sport');
        $blog25->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog25->setImage('one_or_zero.jpg');
        $blog25->setAuthor('Gary Winston');
        $blog25->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $manager->persist($blog25);

        $blog26 = new Blog();
        $blog26->setTitle('A day with Symfony27');
        $blog26->setCategory('Sport');
        $blog26->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $blog26->setImage('beach.jpg');
        $blog26->setAuthor('Ivan Ilin');
        $blog26->setTags('symfony27, php, paradise, symblog');
        $manager->persist($blog26);

        $blog27 = new Blog();
        $blog27->setTitle('The pool on the roof must have a leak');
        $blog27->setCategory('Capital');
        $blog27->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $blog27->setImage('pool_leak.jpg');
        $blog27->setAuthor('Zero Cool');
        $blog27->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $manager->persist($blog27);

        $blog28 = new Blog();
        $blog28->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $blog28->setCategory('Culture');
        $blog28->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog28->setImage('misdirection.jpg');
        $blog28->setAuthor('Gabriel');
        $blog28->setTags('misdirection, magic, movie, hacking, symblog');
        $manager->persist($blog28);

        $blog29 = new Blog();
        $blog29->setTitle('The grid - A digital frontier');
        $blog29->setCategory('Nature');
        $blog29->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog29->setImage('the_grid.jpg');
        $blog29->setAuthor('Kevin Flynn');
        $blog29->setTags('grid, daftpunk, movie, symblog');
        $manager->persist($blog29);

        $blog30 = new Blog();
        $blog30->setTitle('You\'re either a one or a zero. Alive or dead');
        $blog30->setCategory('Sport');
        $blog30->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog30->setImage('one_or_zero.jpg');
        $blog30->setAuthor('Gary Winston');
        $blog30->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $manager->persist($blog30);

        $blog31 = new Blog();
        $blog31->setTitle('A day with Symfony32');
        $blog31->setCategory('Sport');
        $blog31->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $blog31->setImage('beach.jpg');
        $blog31->setAuthor('dsyph33r');
        $blog31->setTags('symfony32, php, paradise, symblog');
        $manager->persist($blog31);

        $blog32 = new Blog();
        $blog32->setTitle('The pool on the roof must have a leak');
        $blog32->setCategory('Capital');
        $blog32->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $blog32->setImage('pool_leak.jpg');
        $blog32->setAuthor('Zero Cool');
        $blog32->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $manager->persist($blog32);

        $blog33 = new Blog();
        $blog33->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $blog33->setCategory('Culture');
        $blog33->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog33->setImage('misdirection.jpg');
        $blog33->setAuthor('Gabriel');
        $blog33->setTags('misdirection, magic, movie, hacking, symblog');
        $manager->persist($blog33);

        $blog34 = new Blog();
        $blog34->setTitle('The grid - A digital frontier');
        $blog34->setCategory('Nature');
        $blog34->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog34->setImage('the_grid.jpg');
        $blog34->setAuthor('Kevin Flynn');
        $blog34->setTags('grid, daftpunk, movie, symblog');
        $manager->persist($blog34);

        $blog35 = new Blog();
        $blog35->setTitle('You\'re either a one or a zero. Alive or dead');
        $blog35->setCategory('Sport');
        $blog35->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog35->setImage('one_or_zero.jpg');
        $blog35->setAuthor('Gary Winston');
        $blog35->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $manager->persist($blog35);

        $blog36 = new Blog();
        $blog36->setTitle('A day with Symfony37');
        $blog36->setCategory('Sport');
        $blog36->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $blog36->setImage('beach.jpg');
        $blog36->setAuthor('Ivan Ilin');
        $blog36->setTags('symfony37, php, paradise, symblog');
        $manager->persist($blog36);

        $blog37 = new Blog();
        $blog37->setTitle('The pool on the roof must have a leak');
        $blog37->setCategory('Capital');
        $blog37->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $blog37->setImage('pool_leak.jpg');
        $blog37->setAuthor('Zero Cool');
        $blog37->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $manager->persist($blog37);

        $blog38 = new Blog();
        $blog38->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $blog38->setCategory('Culture');
        $blog38->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog38->setImage('misdirection.jpg');
        $blog38->setAuthor('Gabriel');
        $blog38->setTags('misdirection, magic, movie, hacking, symblog');
        $manager->persist($blog38);

        $blog39 = new Blog();
        $blog39->setTitle('The grid - A digital frontier');
        $blog39->setCategory('Nature');
        $blog39->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog39->setImage('the_grid.jpg');
        $blog39->setAuthor('Kevin Flynn');
        $blog39->setTags('grid, daftpunk, movie, symblog');
        $manager->persist($blog39);

        $blog40 = new Blog();
        $blog40->setTitle('You\'re either a one or a zero. Alive or dead');
        $blog40->setCategory('Sport');
        $blog40->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog40->setImage('one_or_zero.jpg');
        $blog40->setAuthor('Gary Winston');
        $blog40->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $manager->persist($blog40);

        $manager->flush();

        $this->addReference('blog-1', $blog1);
        $this->addReference('blog-2', $blog2);
        $this->addReference('blog-3', $blog3);
        $this->addReference('blog-4', $blog4);
        $this->addReference('blog-5', $blog5);
        $this->addReference('blog-6', $blog6);
        $this->addReference('blog-7', $blog7);
        $this->addReference('blog-8', $blog8);
        $this->addReference('blog-9', $blog9);
        $this->addReference('blog-10', $blog10);
        $this->addReference('blog-11', $blog11);
        $this->addReference('blog-12', $blog12);
        $this->addReference('blog-13', $blog13);
        $this->addReference('blog-14', $blog14);
        $this->addReference('blog-15', $blog15);
        $this->addReference('blog-16', $blog16);
        $this->addReference('blog-17', $blog17);
        $this->addReference('blog-18', $blog18);
        $this->addReference('blog-19', $blog19);
        $this->addReference('blog-20', $blog20);
        $this->addReference('blog-21', $blog21);
        $this->addReference('blog-22', $blog22);
        $this->addReference('blog-23', $blog23);
        $this->addReference('blog-24', $blog24);
        $this->addReference('blog-25', $blog25);
        $this->addReference('blog-26', $blog26);
        $this->addReference('blog-27', $blog27);
        $this->addReference('blog-28', $blog28);
        $this->addReference('blog-29', $blog29);
        $this->addReference('blog-30', $blog30);
        $this->addReference('blog-31', $blog31);
        $this->addReference('blog-32', $blog32);
        $this->addReference('blog-33', $blog33);
        $this->addReference('blog-34', $blog34);
        $this->addReference('blog-35', $blog35);
        $this->addReference('blog-36', $blog36);
        $this->addReference('blog-37', $blog37);
        $this->addReference('blog-38', $blog38);
        $this->addReference('blog-39', $blog39);
        $this->addReference('blog-40', $blog40);
    }
    public function getOrder()
    {
        return 1;
    }

}