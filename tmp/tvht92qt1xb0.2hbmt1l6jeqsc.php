<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $title ?></h1>
        <p>user is logged in as <?= $username ?> using <?= $password ?> </p>
        
        <!--conditional content -->
        <h3>message</h3>
        <?php if ($preferredCustomer): ?>
            <strong>thanks for being a pref customer</strong>
        <?php endif; ?>
        
        <?php if ($lastLogin > strtotime ('-1 month')): ?>
            Welcome back!
            <?php else: ?>It's been awhillllle
        <?php endif; ?>
        
        <?php if ($myPet->getColor('pink')): ?>
            
                <img class="img-rounded pull-right" src="http://3.bp.blogspot.com/-LrFHXaONx-Q/T-c608kEgZI/AAAAAAAJDic/rmXajBexsyI/s1600/pet+pictures+%281%29.gif" alt="pupphoto">
            
            
            <?php else: ?>somethins wrong bro
        <?php endif; ?>
        
        <!-- printing objects -->
        <h3>my Pet</h3>
        <p><?= $myPet->getName() ?></p>
        <p><?= $myPet->getColor() ?></p>
        
 
 <!--working with expressions -->
        <h3>Temperature</h3>
        <p>Fahrenheit: <?= $temp ?> degrees</p>
        <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
        <p>Temp total: <?= $temp + $temp2 ?></p>
        <p>I like <?= $color ?> </p>
        <p>The circumference of a radius <?= $radius ?> circle is : <?= $radius * (3.14 * 2) ?></p>
        
        <!-- looping over arrays -->
        <h3>bookmarks</h3>
        <p>First bookmark:<a href=" <?= $bookmarks[0] ?>"><?= $bookmarks[0] ?></a></p>
        <ul>
            <?php foreach (($bookmarks?:[]) as $bookmark): ?>
                <li><a href=" <?= $bookmark ?>"><?= str_replace('http://', '', $bookmark); ?> </a></li> 
            <?php endforeach; ?>
        </ul>
        
        
        <!-- an associative array --> 
   <h3>Addresses</h3> 
   <p><?= $addresses['primary'] ?></p> 
   <p><?= $addresses['secondary'] ?></p> 
        
    <!-- looping over associative arrays --> 
    <?php foreach (($addresses?:[]) as $key=>$value): ?> 
      <p><?= $key ?> - <?= $value ?></p> 
   <?php endforeach; ?>     
        
        
    </body>
</html>