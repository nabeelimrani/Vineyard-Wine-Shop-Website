<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\WineCategory;
use App\Models\Wine;
use Illuminate\Support\Facades\Storage;


class SettingController extends Controller
{
    public function index()
    {
        $wines = Wine::all(); 
        $settings = Setting::first();
        $categories = WineCategory::all();     
       
        return view('index', [
            'wines' => $wines,
            'settings' => $settings,
            'categories' => $categories,
        ]);
    }
    public function changestatus(Request $request)
    {
        $status = $request->input('contactid');
        $statusdata = Contact::where('id',$status)->first();
        $statusname = $request->input('statusname');
   

        if ($statusdata) {    
            // Update the fields
          
            $statusdata->status = $statusname;
    
            $statusdata->save();
    
            
        } 
        $wines = Wine::all(); 
    $settings = Setting::first();
    $categories = WineCategory::all();  
    $contact = Contact::all();
    $totalcontact = Contact::count();   
    $blog = Blog::all();
    $contact = Contact::all();       
   
    return view('Front-End.contacttable', [
        'wines' => $wines,
        'settings' => $settings,
        'categories' => $categories,
        'contact' => $contact,
            'totalcontact' => $totalcontact,
            'blog' => $blog,
            'contact' => $contact,
    ]);
    }
public function contacttable()
{
    $wines = Wine::all(); 
    $settings = Setting::first();
    $categories = WineCategory::all();  
    $contact = Contact::all();
    $totalcontact = Contact::count();   
    $blog = Blog::all();
    $contact = Contact::all();       
   
    return view('Front-End.contacttable', [
        'wines' => $wines,
        'settings' => $settings,
        'categories' => $categories,
        'contact' => $contact,
            'totalcontact' => $totalcontact,
            'blog' => $blog,
            'contact' => $contact,
    ]);
}
   public function blogtable()
   {
    $wines = Wine::all(); 
        $settings = Setting::first();
        $categories = WineCategory::all();  
        $contact = Contact::all();
        $totalcontact = Contact::count();   
        $blog = Blog::all();    
       
        return view('Front-End.blogtables', [
            'wines' => $wines,
            'settings' => $settings,
            'categories' => $categories,
            'contact' => $contact,
            'totalcontact' => $totalcontact,
            'blog' => $blog,
        ]);
   }
   public function winetable()
   {
    $wines = Wine::all(); 
        $settings = Setting::first();
        $categories = WineCategory::all();  
        $contact = Contact::all();
        $totalcontact = Contact::count();   
        $blog = Blog::all();    
       
        return view('Front-End.wineshoptable', [
            'wines' => $wines,
            'settings' => $settings,
            'categories' => $categories,
            'contact' => $contact,
            'totalcontact' => $totalcontact,
            'blog' => $blog,
        ]);
   }
   public function winecategorytable()
   {
    $wines = Wine::all(); 
    $settings = Setting::first();
    $categories = WineCategory::all();  
    $contact = Contact::all();
    $totalcontact = Contact::count();   
    $blog = Blog::all();    
   
    return view('Front-End.winecategorytable', [
        'wines' => $wines,
        'settings' => $settings,
        'categories' => $categories,
        'contact' => $contact,
        'totalcontact' => $totalcontact,
        'blog' => $blog,
    ]);
   }

 public function blogedit(Request $request)
   {
    $wines = Wine::all(); 
        $settings = Setting::first();
        $categories = WineCategory::all();  
        $contact = Contact::all();
        $totalcontact = Contact::count();   
        $blog = Blog::find($request->blogid);    
       
        return view('Front-End.blogs', [
            'wines' => $wines,
            'settings' => $settings,
            'categories' => $categories,
            'contact' => $contact,
            'totalcontact' => $totalcontact,
            'blog' => $blog,
            'blogtitle' => "Update",
        ]);
   }
   public function winecategoryedit(Request $request)
   {
    $wines = Wine::all(); 
        $settings = Setting::first();
        $categories = WineCategory::all();  
        $contact = Contact::all();
        $totalcontact = Contact::count();   
        $winecategory = WineCategory::find($request->blogid);    
       
        return view('Front-End.winecategory', [
            'wines' => $wines,
            'settings' => $settings,
            'categories' => $categories,
            'contact' => $contact,
            'totalcontact' => $totalcontact,
            'winecategory' => $winecategory,
            'winecategorytitle' => "Update",
        ]);
   }
public function wineedit(Request $request)
{
 $wines = Wine::find($request->winesid); 
     $settings = Setting::first();
     $categories = WineCategory::all();  
     $contact = Contact::all();
     $totalcontact = Contact::count();   
     $winecategory = WineCategory::all();  
    
     return view('Front-End.wineform', [
         'wines' => $wines,
         'settings' => $settings,
         'categories' => $categories,
         'contact' => $contact,
         'totalcontact' => $totalcontact,
         'winecategory' => $winecategory,
         'winetitle' => "Update",
     ]);
}


   public function deleteblog(Request $request)
   {
       $blogdata = Blog::find($request->blogid);
   
       if ($blogdata) {
           $blogdata->delete();
   
           $wines = Wine::all();
           $settings = Setting::first();
           $categories = WineCategory::all();
           $contact = Contact::all();
           $totalcontact = Contact::count();
           $blog = Blog::all();
   
           return view('Front-End.blogtables', compact('wines', 'settings', 'categories', 'contact', 'totalcontact', 'blog'))
               ->with('success-alert', 'Blog post deleted successfully.');
       } else {
           return redirect()->back()->with('error-alert', 'Blog post not found.');
       }
   }
   public function deletewine(Request $request)
   {
       $winedata = Wine::find($request->winesid);
   
       if ($winedata) {
           $winedata->delete();
   
           $wines = Wine::all();
           $settings = Setting::first();
           $categories = WineCategory::all();
           $contact = Contact::all();
           $totalcontact = Contact::count();
           $blog = Blog::all();
   
           return view('Front-End.wineshoptable', compact('wines', 'settings', 'categories', 'contact', 'totalcontact', 'blog'))
               ->with('success-alert', 'Wine deleted successfully.');
       } else {
           return redirect()->back()->with('error-alert', 'Wine not found.');
       }
   }
   public function deletewinecategory(Request $request)
   {
       $winecategoydata = WineCategory::find($request->blogid);
   
       if ($winecategoydata) {
           $winecategoydata->delete();
   
           $wines = Wine::all();
           $settings = Setting::first();
           $categories = WineCategory::all();
           $contact = Contact::all();
           $totalcontact = Contact::count();
           $blog = Blog::all();
   
           return view('Front-End.winecategorytable', compact('wines', 'settings', 'categories', 'contact', 'totalcontact', 'blog'))
               ->with('success-alert', 'Blog post deleted successfully.');
       } else {
           return redirect()->back()->with('error-alert', 'Blog post not found.');
       }
   }
   
   
    public function  winecategories()
    {
        $contact = Contact::all();
        $totalcontact = Contact::count();    
       
        return view('Front-End.winecategory', [
            'contact' => $contact,
            'totalcontact' => $totalcontact,
        ]);
    }
   
    public function admin_dashboard()
    {
        $contact = Contact::all();
        $totalcontact = Contact::count();

        return view('Front-End.index',
        [
            'contact' => $contact,
            'totalcontact' => $totalcontact,

        ]);
    }
    public function registerform()
    {
        $setting = Setting::find(1);
        $contact = Contact::all();
        $totalcontact = Contact::count();

        return view('Front-End.register',
        [
            'contact' => $contact,
            'totalcontact' => $totalcontact,
            'setting' => $setting,

        ]);
    }
    public function blogform()
    {
        $contact = Contact::all();
        $totalcontact = Contact::count();

        return view('Front-End.blogs',
        [
            'contact' => $contact,
            'totalcontact' => $totalcontact,

        ]);
    }

    public function settingcreate(Request $request)
{
    
    $settings = Setting::find($request->id);
    $settings->site_name = $request->input('site_name');
    $settings->site_description = $request->input('site_description');
    $settings->contact_email = $request->input('contact_email');
    $settings->contact_phone = $request->input('contact_phone');
    $settings->address = $request->input('address');
    $settings->about_us = $request->input('about_us');
    $settings->terms_conditions = $request->input('terms_conditions');
    $settings->refund_policy = $request->input('refund_policy');

    // Update new fields
    $settings->opening_hours = $request->input('opening_hours');
    $settings->facebook_link = $request->input('facebook_link');
    $settings->twitter_link = $request->input('twitter_link');
    $settings->gmail_link = $request->input('gmail_link');

    // Update popup image if a new one is provided
    if ($request->hasFile('popup_image')) {
        // Delete the existing image if it exists
        if ($settings->popup_image) {
            Storage::disk('public')->delete($settings->popup_image);
        }

        $image = $request->file('popup_image');
        $imagePath = $image->store('popup_images', 'public');
        $settings->popup_image = $imagePath;
    }

    $settings->save();

    return redirect()->back()->with('success', 'Settings updated successfully!');
}

    

    public function contact()
    {
        $settings = Setting::first(); 
        return view('contactus', ['settings' => $settings]); 
    }

    public function blogcreate(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
            'keywords' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('blog_images', 'public');
            $data['featured_image'] = $imagePath;
        }

        Blog::create($data);

        return redirect()->route('blog.table')->with('success', 'Blog post created successfully.');

    }
    public function blogupdate(Request $request)
    {
        
        $blogid = $request->input('blogid'); 
        $blogdata = Blog::where('id', $blogid)->first();

     
        if ($blogdata) {    
            // Update the fields
            $blogdata->title = $request->input('title');
            $blogdata->content = $request->input('content');
            $blogdata->keywords = $request->input('keywords');
            $blogdata->status = $request->input('status');
    
            // Handle image update if a new image is uploaded
            if ($request->hasFile('featured_image')) {
                // Delete old image if it exists
                Storage::delete('public/' . $blogdata->featured_image);
    
                // Save the new image
                $imagePath = $request->file('featured_image')->store('images', 'public');
                $blogdata->featured_image = $imagePath;
            }
    
            $blogdata->save();
    
            return redirect()->route('blog.table')->with('success', 'Blog post updated successfully.');
        } else {
            return redirect()->route('blog.table')->with('error', 'Blog post not found.');
        }
    }
    public function wineupdate(Request $request)
    {
        
        $wineid = $request->input('winesid'); 

        $winedata = Wine::where('id', $wineid)->first();

     
        if ($winedata) {    
            // Update the fields
            $winedata->name = $request->input('name');
            $winedata->description = $request->input('description');
            $winedata->price = $request->input('price');
            $winedata->status = $request->input('status');
            $winedata->category_id = $request->input('category');
            // Handle image update if a new image is uploaded
            if ($request->hasFile('image')) {
                // Delete old image if it exists
                Storage::delete('public/' . $winedata->image);
    
                // Save the new image
                $imagePath = $request->file('image')->store('images', 'public');
                $winedata->image = $imagePath;
            }
    
            $winedata->save();
    
            return redirect()->route('wine.table')->with('success', 'Wine updated successfully.');
        } else {
            return redirect()->route('wine.table')->with('error', 'Wine not found.');
        }
    }


    public function winecategoryupdate(Request $request)
    {
       
        $winecategoryid = $request->input('winecategoryid'); 

    
$winecategorydata = WineCategory::where('id', '=', $winecategoryid)->first();

        if ($winecategorydata) {    
            // Update the fields
            $winecategorydata->title = $request->input('title');
           
            $winecategorydata->status = $request->input('status');
    
            // Handle image update if a new image is uploaded
          
    
            $winecategorydata->save();
    
            return redirect()->route('winecategory.table')->with('success', 'Wine Category updated successfully.');
        } else {
            return redirect()->route('winecategory.table')->with('error', 'Wine Category not found.');
        }
    }
    
    
    public function blogshow()
    {
        $blogs = Blog::paginate(4); 
        return view('blog-list', ['blogs' => $blogs]); 
    }
    public function blogdetail($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog-detail-fullwidth', compact('blog'));
    }
    
    public function contactform(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'comment' => 'required|string',
            'status' => 'nullable|in:responded,not_responded,default:not_responded',

        ]);

        Contact::create($data);

        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    public function winecategorycreate(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        WineCategory::create($data);

        return redirect()->route('winecategory.table')->with('success', 'Wine Category created successfully.');
    }

    public function wineformshow(){

        $wine = WineCategory::all(); 
        $contact = Contact::all();
        $totalcontact = Contact::count();

        return view('Front-End.wineform',
        [
            'contact' => $contact,
            'totalcontact' => $totalcontact,
            'wine' => $wine,

        ]);
           
        
    }
    public function winecreate(Request $request)
    {
        $wine = new Wine();
        $wine->name = $request->input('name');
        $wine->description = $request->input('description');
        $wine->price = $request->input('price');
        $wine->category_id = $request->input('category');
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('wine_images', 'public');
            $wine->image = $imagePath;
        }
        
        $wine->status = $request->input('status');
        $wine->save();

        return redirect()->route('wine.table')->with('success', 'Wine created successfully!');
   
    }
    public function wineshow()
    {
        $wines = Wine::paginate(12); 
        $categories = WineCategory::all();     
       
      
        return view('shop', [
            'wines' => $wines,
            'categories' => $categories,
        ]);
    }
    public function aboutus()
    {
        $setting = Setting::first(); // Retrieve all wine data
        return view('aboutus', ['setting' => $setting]); 
    }
    
}
