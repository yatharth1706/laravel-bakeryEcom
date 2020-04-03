<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cake;
use Illuminate\Support\Facades\DB;

class cakeController extends Controller
{
    //
    public function index(Request $request){
        // create table if not exist
        $sql = "create table IF NOT EXISTS " . $request->input('item') . "(id INT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, cost INT, rating FLOAT, summary VARCHAR(255), reviews VARCHAR(255), img VARCHAR(255),primary key (id))";
        
        DB::statement($sql);
        // check if it is empty or already full
        $items = DB::select('SELECT * FROM '. $request->input('item'));
        
        if(count($items) == 0){
            if($request->input('item') == 'cakes'){
                $cakes = array(array('Yellow Butter Cake', 200, 8 ,'Yellow butter cakes often involve creaming the butter and sugar together (in modern times, this is done with an electric mixer) then adding the dry and wet ingredients..',200 ,'img/yellowbutter.jpg' ),array('Pound Cake',150 ,9 ,'Named because its made with a pound of each of the main ingredients (flour, butter, and sugar), this cake doesn’t rise much while baking, and the texture is very dense',400 ,'img/poundcake.jpg' ),array('Red Velvet Cake', 400, 8 ,'This is a true favorite, especially in the south. Made with either butter or oil, red velvet cakes color classically comes from the reaction of buttermilk and cocoa powder', 800 , 'img/redvelvet.jpg'));

                foreach ($cakes as $item) {
                    $sql = "INSERT INTO " . $request->input('item') ." (title,cost,rating,summary,reviews,img) VALUES('$item[0]','$item[1]','$item[2]','$item[3]','$item[4]','$item[5]')";
    
                    $result = DB::insert($sql);
                    
                }

            }else if($request->input('item') == 'cupcakes'){
                $cupcakes = array(array('Triple Salted Caramel Cupcakes', 300, 9 ,'The luscious zip of salted caramel is present in three ways in these stunning cupcakes, which feature a sculpture of candied sugar perched atop a cloud of silky buttercream',200 ,'img/triplesalted.jpg' ),array('Sprinkles Strawberry Cupcakes',450 ,9.8 ,'The brightness of fresh red strawberries truly sings in these iconic vanilla cupcakes from the beloved multi-state bakery chain.',600 ,'img/sprinkles.jpg' ),array('butterbear.jpg', 200, 10 ,'No need to visit The Three Broomsticks! You’ll be spellbound after one bite of these butterscotch-frosted beauties, perfect for wizards and muggles alike', 1000 , 'img/butterbear.jpg'));

                foreach ($cupcakes as $item) {
                    $sql = "INSERT INTO " . $request->input('item') ." (title,cost,rating,summary,reviews,img) VALUES('$item[0]','$item[1]','$item[2]','$item[3]','$item[4]','$item[5]')";
    
                    $result = DB::insert($sql);
                    
                }
            }else if($request->input('item') == 'cookies'){
                $cookies = array(array('Chocolate Chip Cookie', 500, 7 ,'Chocolate chip cookies are the classic drop cookies. Though originally made with semisweet chocolate chips',900 ,'img/chocolatecookie.jpg' ),array('Fried Cookie',250 ,7 ,'Fried cookies are one of the eight basic types of cookies, along with bar cookies, drop cookies, molded cookies, pressed cookies, refrigerator cookies',900 ,'img/friedcookie.jpg' ),array('Ginger Bread Cookie', 400, 8 ,'Gingerbread is a prime example of rolled cookies, which means the cookies are made from a stiffer dough that is chilled, rolled out', 800 , 'img/gingercookie.jpg'));

                foreach ($cookies as $item) {
                    $sql = "INSERT INTO " . $request->input('item') ." (title,cost,rating,summary,reviews,img) VALUES('$item[0]','$item[1]','$item[2]','$item[3]','$item[4]','$item[5]')";
    
                    $result = DB::insert($sql);
                    
                }

            }else if($request->input('item') == 'pizzas'){
                $pizzas = array(array('Margherita', 500, 7 ,'A hugely popular margherita, with a deliciously tangy single cheese topping',900 ,'img/margherita.jpg' ),array('Farm House',250 ,7 ,'A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes',900 ,'img/farmhouse.jpg' ),array('Peppy Paneer', 400, 8 ,'Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!', 800 , 'img/peppy.jpg'));
                
                foreach ($pizzas as $item) {
                    $sql = "INSERT INTO " . $request->input('item') ." (title,cost,rating,summary,reviews,img) VALUES('$item[0]','$item[1]','$item[2]','$item[3]','$item[4]','$item[5]')";
    
                    $result = DB::insert($sql);
                    
                }

            }else if($request->input('item') == 'breads'){
                $breads = array(array('Banana Bread', 500, 7 ,'To this category, we can also add zucchini bread. Both banana and zucchini bread are dense, moist, sweet treats, usually chemically leavened with baking soda or powder',900 ,'img/bananabread.jpg' ),array('BreadStick',250 ,7 ,'Nowadays, American restaurants sometimes serve them soft and warm, topped with cheese and garlic, or as a dessert, with icing and cinnamon',900 ,'img/breadstick.jpg' ),array('Ciabatta', 400, 8 ,'Ciabatta hails from Italy, where the word means "slipper" in the native language.', 800 , 'img/cia.jpg'));

                foreach ($breads as $item) {
                    $sql = "INSERT INTO " . $request->input('item') ." (title,cost,rating,summary,reviews,img) VALUES('$item[0]','$item[1]','$item[2]','$item[3]','$item[4]','$item[5]')";
    
                    $result = DB::insert($sql);
                    
                }

            }else if($request->input('item') == 'puddings'){
                $puddings = array(array('Rice Pudding', 500, 7 ,'Unlike pie, rice pudding is almost effortless to make a good batch from scratch—thats why we declared it the last great diner dessert',900 ,'img/ricepudding.jpg' ),array('Chocolate Pudding',250 ,7 ,'Silkier, lighter, and more sinfully good than anything you have ever tasted before.',900 ,'img/chocopudding.jpg' ),array('Cocoa Pudding', 400, 8 ,'Makes you wonder why you would ever serve cold pudding again', 800 , 'img/yummy.jpg'));

                foreach ($puddings as $item) {
                    $sql = "INSERT INTO " . $request->input('item') ." (title,cost,rating,summary,reviews,img) VALUES('$item[0]','$item[1]','$item[2]','$item[3]','$item[4]','$item[5]')";
    
                    $result = DB::insert($sql);
                    
                }

            }else if($request->input('item') == 'jams'){
                $jams = array(array('Apple Jelly', 500, 7 ,'Five pounds of apples yields about six half pints of jelly, so this is a great recipe for storing up for the winter',900 ,'img/applejelly.jpg' ),array('Blue Berry',250 ,7 ,'This fresh blueberry preserves recipe doesn’t require pectin and it is super easy to make',900 ,'img/blueberry.jpg' ),array('Cranberry', 400, 8 ,'It takes about an hour to get this one ready to cook and then the crockpot does all of the hard work for you', 800 , 'img/cranberry.jpg'));

                foreach ($jams as $item) {
                    $sql = "INSERT INTO " . $request->input('item') ." (title,cost,rating,summary,reviews,img) VALUES('$item[0]','$item[1]','$item[2]','$item[3]','$item[4]','$item[5]')";
    
                    $result = DB::insert($sql);
                    
                }

            }else if($request->input('item') == 'pickles'){
                $pickles = array(array('Lemon Pickle', 500, 7 ,'The sourness of the lemon spreading throughout the mouth is something you want to have with the sweet curds and white rice',900 ,'img/lemonpickle.png' ),array('Raw Mango Pickle',250 ,7 ,'Unlike the ready-made mango pickles from plastic jars, freshly made raw mango pickles are totally worth the wait for mango season.',900 ,'img/rawmango.png' ),array('Tomato Pickle', 400, 8 ,'The ripe tomatoes are mainly cooked along with mustard powder and the Indian masalas give the exact taste that an Indian wants to experience.', 800 , 'img/tomatopickle.png'));
                
                foreach ($pickles as $item) {
                    $sql = "INSERT INTO " . $request->input('item') ." (title,cost,rating,summary,reviews,img) VALUES('$item[0]','$item[1]','$item[2]','$item[3]','$item[4]','$item[5]')";
    
                    $result = DB::insert($sql);
                    
                }
            }

        }

        $items = DB::select('SELECT * FROM '. $request->input('item'));

        return view('products',[
            'items' => $items
        ]);
    }

}
