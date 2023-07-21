<%@ page import="java.util.List" %>
<%@ page language="java" contentType="text/html; charset=utf-8" pageEncoding="utf-8" %>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    
    <%-- Importar la clase UsuarioVo y UsuarioDao --%>
    <%@ page import="model.UsuarioVo" %>
    <%@ page import="model.UsuarioDao" %>

    <%-- Obtener la lista de usuarios desde la base de datos --%>
    <% List<UsuarioVo> usuarios = null;
       try {
           usuarios = new UsuarioDao().listar();
       } catch (Exception e) {
           e.printStackTrace();
       }
    %>

    <%-- Verificar si hay usuarios y mostrarlos --%>
    <% if (usuarios != null && !usuarios.isEmpty()) { %>
            <%-- Recorrer la lista de usuarios y mostrar sus detalles --%>
            <div class="card__container">
                <% if (usuarios != null && !usuarios.isEmpty()) { %>
                    <% for (UsuarioVo usuario : usuarios) { %>
                        <div class="card">
                            <div class="card--img">
                                <img src="/assets/img/" alt="">
                            </div>
                            <div class="card--info">
                                <p class="card--subtittle">NOMBRE</p>
                                <p class="card--text"><%= usuario.getUser_firstname() %></p>
                                <p class="card--subtittle">APELLIDO</p>
                                <p class="card--text"><%= usuario.getUser_lastname() %></p>
                                <p class="card--subtittle">CORREO</p>
                                <p class="card--text"><%= usuario.getUser_email() %></p>
                                <p class="card--subtittle">APELLIDO</p>
                                <p class="card--text"><%= usuario.getUser_password() %></p>
                            </div>
                        </div>
                    <% } %>
                <% } else { %>
                    <div class="card">
                        <p>No se encontraron usuarios.</p>
                    </div>
                <% } %>
                <% } %>
            </div>
</body>
</html>