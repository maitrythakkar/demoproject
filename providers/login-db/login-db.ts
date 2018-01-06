//import { Http,Response,RequestOptions,Headers } from '@angular/http';
import {HttpClient,HttpHeaders} from "@angular/common/http";
//import { login_class} from "../../providers/login_class";
import { Injectable } from '@angular/core';

/*
  Generated class for the LoginDbProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class LoginDbProvider {
 url:string="http://localhost:3000/login/";
  constructor(public http: HttpClient) {
    console.log('Hello LoginDbProvider Provider');
  }
 getUserByLogin(item)
  {
     let body=JSON.stringify(item);
    return this.http.post(this.url,body,{headers:new HttpHeaders().set('Content-Type','application/json')});
  }


}
