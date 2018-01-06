import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams,LoadingController,ToastController } from 'ionic-angular';
import { SignupDbProvider } from "../../providers/signup-db/signup-db";
import { signup_class } from "../../providers/signup_class";

import { HomePage } from "../../pages/home/home";
/**
 * Generated class for the AddSignupPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-add-signup',
  templateUrl: 'add-signup.html',
})
export class AddSignupPage {
 pk_email_id:string="";
 User_name:string="";
 Password:string="";
 Fname:string="";
 Lname:string="";
 Gender:number;
 Address:string="";
 Pincode:number;
 Mobile_no:number;
 Bdate:string="";
 constructor(public navCtrl: NavController, public navParams: NavParams,public data:SignupDbProvider,public load:LoadingController,public tos:ToastController) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad AddtaskPage');
  }
  signup1()
  {
    let t1=this.tos.create({
      message:"Registration is successfully done",
      duration:3000,
      position:"bottom"

    })
    let l1=this.load.create({
      content:"loading..",
      spinner:"hh"
    });
    l1.present();
   this.data.signup(new signup_class(this.pk_email_id,this.User_name,this.Password,this.Fname,this.Lname,this.Gender,this.Address,this.Pincode,this.Mobile_no,this.Bdate )).subscribe(
   (d)=>{
        t1.present();
        this.navCtrl.push(HomePage);
   },
    function(e)
    {
      alert(e);
    },
    function()
    {
      l1.dismiss();
    }

  );


}
}



