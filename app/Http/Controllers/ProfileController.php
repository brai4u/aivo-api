<?php

namespace App\Http\Controllers;
use SammyK;

class ProfileController extends Controller
{
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		
		public function index(){
			return response()->json(['status' => 'online']);
		}

		public function getProfile(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb, $id=null){
			
			try {
				$response = $fb->get('/' . $id . '?fields=' . env('FACEBOOK_SCOPE'), env('FACEBOOK_TOKEN'));
			} catch(\Facebook\Exceptions\FacebookSDKException $e) {
					return response()->json(['error' => $e->getMessage()]);
			}				
				$userData = $response->getGraphUser();
				return response()->json([
					'id' => $userData->getId(),
					'firstName' => $userData->getFirstName(),
					'lastName' => $userData->getLastName(),
					'shortName' => $userData['short_name'],
					'profileImage' => $userData['picture']['url'],
					'coverImage' => $userData['cover']['source']
				]);
		}
}
