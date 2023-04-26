
public class AdminLoginController {

    @GetMapping("/admin/login")
    public String showLoginPage() {
        return "admin-login";
    }

    @PostMapping("/admin/login")
    public String handleLogin(@RequestParam String staff_id, @RequestParam String password) {
        // Handle the form data and perform authentication
        return "redirect:/admin/dashboard";
    }

}