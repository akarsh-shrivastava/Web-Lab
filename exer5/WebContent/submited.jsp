<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
  </head>
  <body>
    Name: <%=request.getParameter("name")%> <br>
	Designation: <%=request.getParameter("desg")%> <br>
	Salary: <%=request.getParameter("slry")%> <br>
	DOJ: <%=request.getParameter("doj")%> <br>
  </body>
</html>