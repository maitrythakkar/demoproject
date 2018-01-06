import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams,LoadingController,ToastController } from 'ionic-angular';
import { Storage } from "@ionic/Storage";
//import { HomePage } from "../home/home";
import { LoginDbProvider } from "../../providers/login-db/login-db";
import { login_class } from "../../providers/login_class";
//import { signup_class } from "../../providers/signup_class";
/**
 * Generated class for the LoginPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
})
export class LoginPage {
  pk_email_id:string="";
  Password:string="";
  eid:string;
  constructor(public storage:Storage,public navCtrl: NavController, public navParams: NavParams,public toast:ToastController,public load:LoadingController,public data:LoginDbProvider) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad LoginPage');
    
  }
  login()
  {
    let t1=this.toast.create({
      message:"Username and password are incorrect",
      duration:3000,
      position:"bottom"
    });
    
    this.data.getUserByLogin(new login_class(this.pk_email_id,this.Password)).subscribe(
      (data)=>{
        if(data=="")
        {
          t1.present();
        }
        else
        {
          this.storage.set('name',this.pk_email_id);
          this.storage.get('name').then((val)=>{
            console.log(val);
            this.eid=val;
          });
          
        }
      },
      function(e)
      {
        alert(e);
      }
    );

  }

}
