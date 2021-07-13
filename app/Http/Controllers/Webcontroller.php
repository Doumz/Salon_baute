<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateValidationRequest;
use Illuminate\Support\Str;
use Validator;
use DB;
use Image as InterventionImage;
use App\Models\Coiffure;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Make_up;
use App\Models\Massage;
use App\Models\Preocupation;
use App\Models\Realisation;
use App\Models\Reservation;


class Webcontroller extends Controller
{

   public function affiche_prest()
   {
    $coiffure = Coiffure::all($id);
    $make_up= Make_up::all();
    $massage= Massage::all();
    $realisation= Realisation::all();
    $reservation= Reservation::all();
    $image= Image::all();
    return view('home', compact('coiffure','make_up' ,'massage' ,'reservation','image'));

   }

  /*Reservation*/  
public function add_reservation(Request $request)
{
 $fileName = null;
    if(request()->hasFile('img')){
        $img = request()->file('img');
        $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
        $source = $img;
        $target = 'images/' .$image;
        //dd($source, $target);
        InterventionImage::make($source)->fit(100, 100)->save($target);
    } 
     if(request()->hasFile('photo')){
        $n2=0;
        $AutresPhotos = array();
        foreach(request()->file('photo') as $img){
            $n2++;
            $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$AutrePhoto;

            InterventionImage::make($source)->fit(500, 500)->save($target);
            array_push($AutresPhotos, $AutrePhoto);
        }
        $AutresPhotos = json_encode($AutresPhotos);
    }else{
        $AutresPhotos = null;
    }
    $reservation = Reservation::create([
        'nom_client' => $request->nom_client,
        'prenom_client' => $request->nom_client,
        'mail_client' => $request->mail_client,
        'contact_client' => $request->contact_client,
        'date_reservation' => $request->date_reservation,
        'motif' => $request->motif,
        'message' => $request->message,
        'img' => $image,
        'photo' => $AutresPhotos,   
    ]);
   //dd($Test);
     session()->flash('message','Ajout effectué avec succès');
     return redirect()->route('rdv');
  }

    public function delete_reservation($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }


    public function update_reservation($id)
    {
        $reservation = Reservation::find($id);
        return view('admin.Update.update_apparts',compact('single'));
    }

    public function edite_reservation(Request $request, $id)
{        
    $updated= Reservation::find($id);
          $fileName= null;
         if(request()->hasFile('img')){
            $img = request()->file('img');
            $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$image;
            //dd($source, $target);
            InterventionImage::make($source)->fit(100, 100)->save($target);
        }
         else{

            $image = $updated->image;
           }
         if(request()->hasFile('photo')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photo') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'images/' .$AutrePhoto;

                InterventionImage::make($source)->fit(500, 500)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photo;
        }

       $updated->update([
                'nom_client' => $request->nom_client,
                'prenom_client' => $request->nom_client,
                'mail_client' => $request->mail_client,
                'contact_client' => $request->contact_client,
                'date_reservation' => $request->date_reservation,
                'motiif' => $request->motiif,
                'message' => $request->message,
                'img' => $image,
                'photo' => $AutresPhotos,  
        ]);

        session()->flash('message','Update effectuée avec succès');
         return redirect()->route('home');
    
}

/*Coiffure*/
public function add_coiffure(Request $request)
{
 $fileName = null;
    if(request()->hasFile('img')){
        $img = request()->file('img');
        $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
        $source = $img;
        $target = 'images/' .$image;
        //dd($source, $target);
        InterventionImage::make($source)->fit(100, 100)->save($target);
    } 
     if(request()->hasFile('photo')){
        $n2=0;
        $AutresPhotos = array();
        foreach(request()->file('photo') as $img){
            $n2++;
            $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$AutrePhoto;

            InterventionImage::make($source)->fit(500, 500)->save($target);
            array_push($AutresPhotos, $AutrePhoto);
        }
        $AutresPhotos = json_encode($AutresPhotos);
    }else{
        $AutresPhotos = null;
    }
    $coiffure = Coiffure::create([
        'titre_coiffure' => $request->titre_coiffure,
        'prix' => $request->prix,
        'img' => $image,
        'photo' => $AutresPhotos,  
        'date_coiffure' => $request->date_coiffure, 
    ]);
   //dd($Test);
     session()->flash('message','Coiffure enregistrée avec succès');
     return redirect()->route('home');
  }

    public function delete_coiffure($id)
    {
        $coiffure = Coiffure::find($id);
        $coiffure->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }


    public function update_coiffure($id)
    {
        $coiffure = Coiffure::find($id);
        return view('admin.Update.update_apparts',compact('coiffure'));
    }

    public function edite_coiffure(Request $request, $id)
{        
    $updated= Coiffure::find($id);
          $fileName= null;
         if(request()->hasFile('img')){
            $img = request()->file('img');
            $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$image;
            //dd($source, $target);
            InterventionImage::make($source)->fit(100, 100)->save($target);
        }
         else{

            $image = $updated->image;
           }
         if(request()->hasFile('photo')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photo') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'images/' .$AutrePhoto;

                InterventionImage::make($source)->fit(500, 500)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photo;
        }

       $updated->update([
            'prix' => $request->prix,
            'img' => $image,
            'photo' => $AutresPhotos,  
            'date_coiffure' => $request->date_coiffure,   
        ]);

        session()->flash('message','Update effectuée avec succès');
         return redirect()->route('home');
    
}

/*Make_up*/
public function add_make_up(Request $request)
{
 $fileName = null;
    if(request()->hasFile('img')){
        $img = request()->file('img');
        $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
        $source = $img;
        $target = 'images/' .$image;
        //dd($source, $target);
        InterventionImage::make($source)->fit(100, 100)->save($target);
    } 
     if(request()->hasFile('photo')){
        $n2=0;
        $AutresPhotos = array();
        foreach(request()->file('photo') as $img){
            $n2++;
            $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$AutrePhoto;

            InterventionImage::make($source)->fit(500, 500)->save($target);
            array_push($AutresPhotos, $AutrePhoto);
        }
        $AutresPhotos = json_encode($AutresPhotos);
    }else{
        $AutresPhotos = null;
    }
    $make_up = Make_up::create([
        'titre_make_up' => $request->titre_make_up,
        'prix' => $request->prix,
        'img' => $image,
        'photo' => $AutresPhotos,  
        'date_make_up' => $request->date_make_up, 
    ]);
   //dd($Test);
     session()->flash('message','Ajout effectué avec succès');
     return redirect()->route('dashboard.update.dashForm');
  }

    public function delete_makeup($id)
    {
        $make_up = Make_up::find($id);
        $make_up->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->route('dashboard.update.dashForm');
    }


    public function update_make_up($id)
    {
        $make_up = Make_up::find($id);
        return view('dashboard.update.forms',compact('make_up'));
    }

    public function edite_make_up(Request $request, $id)
{        
    $updated= Make_up::find($id);
          $fileName= null;
         if(request()->hasFile('img')){
            $img = request()->file('img');
            $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$image;
            //dd($source, $target);
            InterventionImage::make($source)->fit(100, 100)->save($target);
        }
         else{

            $image = $updated->image;
           }
         if(request()->hasFile('photo')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photo') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'images/' .$AutrePhoto;

                InterventionImage::make($source)->fit(500, 500)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photo;
        }

       $updated->update([
            'titre_make_up' => $request->titre_make_up,
            'prix' => $request->prix,
            'img' => $image,
            'photo' => $AutresPhotos,  
            'date_make_up' => $request->date_make_up   
        ]);

        session()->flash('message','Update effectuée avec succès');
         return redirect()->route('dashForm');
    
}


/*Massage*/
public function add_massage(Request $request)
{
 $fileName = null;
    if(request()->hasFile('img')){
        $img = request()->file('img');
        $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
        $source = $img;
        $target = 'images/' .$image;
        //dd($source, $target);
        InterventionImage::make($source)->fit(100, 100)->save($target);
    } 
     if(request()->hasFile('photo')){
        $n2=0;
        $AutresPhotos = array();
        foreach(request()->file('photo') as $img){
            $n2++;
            $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$AutrePhoto;

            InterventionImage::make($source)->fit(500, 500)->save($target);
            array_push($AutresPhotos, $AutrePhoto);
        }
        $AutresPhotos = json_encode($AutresPhotos);
    }else{
        $AutresPhotos = null;
    }
    $massage = Massage::create([
        'titre_massage' => $request->titre_massage,
        'prix' => $request->prix,
        'img' => $image,
        'photo' => $AutresPhotos,  
        'date_massage' => $request->date_massage, 
    ]);
   //dd($Test);
     session()->flash('message','Massage enregistrée avec succès');
     return redirect()->route('home');
  }

    public function delete_massage($id)
    {
        $massage = Massage::find($id);
        $massage->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }


    public function update_massage($id)
    {
        $massage = Massage::find($id);
        return view('admin.Update.update_apparts',compact('massage'));
    }

    public function edite_massage(Request $request, $id)
{        
    $updated= Massage::find($id);
          $fileName= null;
         if(request()->hasFile('img')){
            $img = request()->file('img');
            $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$image;
            //dd($source, $target);
            InterventionImage::make($source)->fit(100, 100)->save($target);
        }
         else{

            $image = $updated->image;
           }
         if(request()->hasFile('photo')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photo') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'images/' .$AutrePhoto;

                InterventionImage::make($source)->fit(500, 500)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photo;
        }

       $updated->update([
            'prix' => $request->prix,
            'img' => $image,
            'photo' => $AutresPhotos,  
            'date_makeup' => $request->date_coiffure,   
        ]);

        session()->flash('message','Update effectuée avec succès');
         return redirect()->route('home');
    
}

/*Realisation*/
public function add_realisation(Request $request)
{
 $fileName = null;
    if(request()->hasFile('img')){
        $img = request()->file('img');
        $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
        $source = $img;
        $target = 'images/' .$image;
        //dd($source, $target);
        InterventionImage::make($source)->fit(100, 100)->save($target);
    } 
     if(request()->hasFile('photo')){
        $n2=0;
        $AutresPhotos = array();
        foreach(request()->file('photo') as $img){
            $n2++;
            $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$AutrePhoto;

            InterventionImage::make($source)->fit(500, 500)->save($target);
            array_push($AutresPhotos, $AutrePhoto);
        }
        $AutresPhotos = json_encode($AutresPhotos);
    }else{
        $AutresPhotos = null;
    }
    $realisation = Realisation::create([
        'nom_realisation' => $request->nom_realisation,
        'nom_client' => $request->nom_client,
        'prenom_client' => $request->prenom_client,
        'contact_client' => $request->contact_client,
        'nom_employer' => $request->nom_employer,
        'img' => $image,
        'photo' => $AutresPhotos,  
        'date_realisation' => $request->date_realisation,
    ]);
   //dd($Test);
     session()->flash('message','Ajout effectué avec succès');
     return redirect()->route('home');
  }

    public function delete_realisation($id)
    {
        $realisation = Realisation::find($id);
        $realisation->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }


    public function update_realisation($id)
    {
        $realisation = Realisation::find($id);
        return view('admin.Update.update_apparts',compact('massage'));
    }

    public function edite_realisation(Request $request, $id)
{        
    $updated= Realisation::find($id);
          $fileName= null;
         if(request()->hasFile('img')){
            $img = request()->file('img');
            $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$image;
            //dd($source, $target);
            InterventionImage::make($source)->fit(100, 100)->save($target);
        }
         else{

            $image = $updated->image;
           }
         if(request()->hasFile('photo')){

            $n2=0;
            $AutresPhotos = array();

            foreach(request()->file('photo') as $img){
                $n2++;
                $AutrePhoto = md5($img->getClientOriginalExtension().time()).$n2.".".$img->getClientOriginalExtension();

                $source = $img;
                $target = 'images/' .$AutrePhoto;

                InterventionImage::make($source)->fit(500, 500)->save($target);
                array_push($AutresPhotos, $AutrePhoto);
            }
            $AutresPhotos = json_encode($AutresPhotos);

        }else{
            $AutresPhotos = $updated->photo;
        }

       $updated->update([
                'nom_realisation' => $request->nom_realisation,
                'nom_client' => $request->nom_client,
                'prenom_client' => $request->prenom_client,
                'contact_client' => $request->contact_client,
                'nom_employer' => $request->nom_employer,
                'img' => $image,
                'photo' => $AutresPhotos,   
                'date_realisation' => $request->date_realisation,
        ]);

        session()->flash('message','Update effectuée avec succès');
         return redirect()->route('home');
    
}

 /*Image*/
public function add_image(Request $request)
{
 $fileName = null;
    if(request()->hasFile('img')){
        $img = request()->file('img');
        $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
        $source = $img;
        $target = 'images/' .$image;
        //dd($source, $target);
        InterventionImage::make($source)->fit(500, 500)->save($target);
    } 
  
    $realisation = Image::create([
        'title_img' => $request->title_img,
        'img' => $image,
         
    ]);
   //dd($Test);
     session()->flash('message','Coiffure enregistrée  avec succès');
     return redirect()->route('home');
  }

    public function delete_image($id)
    {
        $image = Image::find($id);
        $image->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

/*Preocupation*/
    public function add_preocupation(Request $request)
    {
    
        Preocupation::create([
        'nom_client' => htmlspecialchars($request->nom_client),
        'prenom_client' => htmlspecialchars($request->prenom_client),
        'preocupation' => htmlspecialchars($request->preocupation),
        'mail_client' => htmlspecialchars($request->mail_client),
        'contact_client' => htmlspecialchars($request->contact_client),
    ]);
    session()->flash('message','Votre préocpatgion à bien été envoyé avec succès');
   return redirect()->route('detail');

    }
    
        public function delete_preocupation($id)
        {
            $preocupation = Preocupation::find($id);
            $preocupation->delete();
            session()->flash('message','Operation effectuée avec succès');
            return redirect()->back();
        }

/*Comment*/
    public function add_comment(Request $request)
    {
    
        Preocupation::create([
        'nom_client' => htmlspecialchars($request->nom_client),
        'mail_client' => htmlspecialchars($request->mail_client),
        'contact_client' => htmlspecialchars($request->contact_client),
        'comment' => htmlspecialchars($request->comment),
    ]);
      session()->flash('message','Ajout effectué avec succès');
      return redirect()->route('home');

    }
    
   public function delete_comment($id)
        {
            $comment = Comment::find($id);
            $comment->delete();
            session()->flash('message','Operation effectuée avec succès');
            return redirect()->back();
        }



}
