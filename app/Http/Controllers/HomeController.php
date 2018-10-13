<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Post;
use App\User;



class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        return view('home');

    }



    public function posts()

    {

        $posts = Post::all();

        return view('posts',compact('posts'));

    }



    public function show($id)

    {

        $post = Post::find($id);

        return view('postsShow',compact('post'));

    }



    public function postPost(Request $request)

    {

        request()->validate(['rate' => 'required']);

        $post = Post::find($request->id);



        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;

        $rating->user_id = auth()->user()->id;



        $post->ratings()->save($rating);



        return redirect()->route("posts");

    }

    public function add()

    {

         return view('addRating');

    }

   // public function store(Request $request)
   //  {
   //      $name =  new name;
   //      $name->details = $request->get('name');
   //      //dd($request->get('name'));
   //      $name->save();
   //      return "Success";
   //  }

   //  public function create()
   //  {
   //      return view('add_more');
   //  }


// public function save_data(Request $request)
// {     
//     $post = Post::create($request->all());
//     return redirect()->route('/home');
// }


public function store(Request $request)
    {
        $this->validate(request(),[
            //put fields to be validated here
            ]);         
       
    $n= new Post();
        $n->name= $request['name'];
    // add other fields
    $n->save();

          
        // $request->session()->flash('alert-success', 'User was successful added!');
        // return redirect('/home')->back()->with('success', 'successfully added');;

        return redirect()->route('home')->with('success', 'Successfully added!');

    }
}