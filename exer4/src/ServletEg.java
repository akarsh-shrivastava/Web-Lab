import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/ServletEg")
public class ServletEg extends HttpServlet {
	private static final long serialVersionUID = 1L;

    public ServletEg() {
        super();
    }

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String name = request.getParameter("name");
		String desg = request.getParameter("desg");
		String slry = request.getParameter("slry");
		String doj = request.getParameter("doj");
		String output = "Name: "+name+
						"\nDesignation: "+desg+
						"\nSalary: "+slry+
						"\nDOJ: "+doj;
		response.getWriter().println(output);
	}
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doPost(request, response);
	}
}