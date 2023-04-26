@Controller
public class RegistrationController {

    @GetMapping("/registration")
    public String showRegistrationForm(Model model) {
        // add any necessary model attributes here
        return "registration";
    }

    @PostMapping("/registration")
    public String submitRegistrationForm(@ModelAttribute User user) {
        // process the form submission here
        return "redirect:/success"; // redirect to a success page
    }
}
