<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contest extends Model
{
    use HasFactory;
    private static $image;
    private static $imageName;
    private static $directory;
    private static $imageUrl;
    private static $contests;

    private static function getImageUrl($request)
    {
        self::$image=$request->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory='contests-image/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl=self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newContest($request)
    {
        self::$contests=new Contest();
        self::$contests->title=$request->title;
        self::$contests->slug=Str::slug($request->title);
        self::$contests->category_id=$request->category_id;
        self::$contests->price=$request->price;
        self::$contests->code=$request->code;
        self::$contests->qty=$request->qty;
        self::$contests->draw_date=$request->draw_date;
        self::$contests->detail=$request->detail;
        self::$contests->more_detail=$request->more_detail;
        self::$contests->start_date=$request->start_date;
        self::$contests->end_date=$request->end_date;
        if ($request->file('image'))
        {
            self::$contests->image=self::getImageUrl($request);
        }
        if ($request->status==1)
        {
            self::$contests->status=$request->status;
        }
        else
        {
            self::$contests->status=2;
        }
        self::$contests->save();
    }

    public static function updateContest($request,$id)
    {
        self::$contests=Contest::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$contests->image))
            {
                unlink(self::$contests->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$contests->image;
        }
        self::$contests->title=$request->title;
        self::$contests->slug=Str::slug($request->title);
        self::$contests->category_id=$request->category_id;
        self::$contests->price=$request->price;
        self::$contests->code=$request->code;
        self::$contests->qty=$request->qty;
        self::$contests->draw_date=$request->draw_date;
        self::$contests->detail=$request->detail;
        self::$contests->more_detail=$request->more_detail;
        self::$contests->start_date=$request->start_date;
        self::$contests->end_date=$request->end_date;
        self::$contests->image=self::$imageUrl;
        if ($request->status==1)
        {
            self::$contests->status=$request->status;
        }
        else
        {
            self::$contests->status=2;
        }
        self::$contests->save();
    }
}
