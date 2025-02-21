package com.velzon.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class Authentication {

	@GetMapping("/auth-signin-basic")
	public String auth_signin_basic() {
		return "authentication/auth-signin-basic";
	}
	
	@GetMapping("/auth-signin-cover")
	public String auth_signin_cover() {
		return "authentication/auth-signin-cover";
	}
	
	@GetMapping("/auth-signup-basic")
	public String auth_signup_basic() {
		return "authentication/auth-signup-basic";
	}
	
	@GetMapping("/auth-signup-cover")
	public String auth_signup_cover() {
		return "authentication/auth-signup-cover";
	}
	
	@GetMapping("/auth-pass-reset-basic")
	public String auth_pass_reset_basic() {
		return "authentication/auth-pass-reset-basic";
	}
	
	@GetMapping("/auth-pass-reset-cover")
	public String auth_pass_reset_cover() {
		return "authentication/auth-pass-reset-cover";
	}
	
	@GetMapping("/auth-pass-change-basic")
	public String auth_pass_change_basic() {
		return "authentication/auth-pass-change-basic";
	}
	
	@GetMapping("/auth-pass-change-cover")
	public String auth_pass_change_cover() {
		return "authentication/auth-pass-change-cover";
	}
	
	@GetMapping("/auth-lockscreen-basic")
	public String auth_lockscreen_basic() {
		return "authentication/auth-lockscreen-basic";
	}
	
	@GetMapping("/auth-lockscreen-cover")
	public String auth_lockscreen_cover() {
		return "authentication/auth-lockscreen-cover";
	}
	
	@GetMapping("/auth-logout-basic")
	public String auth_logout_basic() {
		return "authentication/auth-logout-basic";
	}
	
	@GetMapping("/auth-logout-cover")
	public String auth_logout_cover() {
		return "authentication/auth-logout-cover";
	}
	
	@GetMapping("/auth-success-msg-basic")
	public String auth_success_msg_basic() {
		return "authentication/auth-success-msg-basic";
	}
	
	@GetMapping("/auth-success-msg-cover")
	public String auth_success_msg_cover() {
		return "authentication/auth-success-msg-cover";
	}
	
	@GetMapping("/auth-twostep-basic")
	public String auth_twostep_basic() {
		return "authentication/auth-twostep-basic";
	}
	
	@GetMapping("/auth-twostep-cover")
	public String auth_twostep_cover() {
		return "authentication/auth-twostep-cover";
	}
	
	@GetMapping("/auth-404-basic")
	public String auth_not_found_basic() {
		return "authentication/auth-404-basic";
	}
	
	@GetMapping("/auth-404-cover")
	public String auth_not_found_cover() {
		return "authentication/auth-404-cover";
	}
	
	@GetMapping("/auth-404-alt")
	public String auth_not_found_alt() {
		return "authentication/auth-404-alt";
	}
	
	@GetMapping("/auth-500")
	public String auth_server_error() {
		return "authentication/auth-500";
	}
	
	@GetMapping("/auth-offline")
	public String auth_offline() {
		return "authentication/auth-offline";
	}
}






