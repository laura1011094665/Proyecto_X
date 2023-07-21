package model;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import controller.*;

public class UsuarioDao {


    //!ADVERTENCIA:  En las clases Dao podremos realizar diferentes ejecucuines como lo hacemos en phpMyAdmin o WorkBench.
    //SECCION:  Atrubutos para realizar acciones en la base de datos.   e
    Connection con; //objeto de conexión
    PreparedStatement ps; //preparar sentencias
    ResultSet rs; // almacenar consutas
    String sql=null;
    int r; //cantidad de filas que devuelve una sentencia


    //? Registrar usuario.
    public int registrar(UsuarioVo Usuario) throws SQLException{

        sql="INSERT INTO users_tbl (user_firstname, user_lastname, user_email, user_password) values (?,?,?,?)";
        System.out.println(sql);

        try{
            con=Conexion.conectar(); //abrir conexión.
            ps=con.prepareStatement(sql); //preparar sentencia.
            ps.setString(1, Usuario.getUser_firstname());
            ps.setString(2, Usuario.getUser_lastname());
            ps.setString(3, Usuario.getUser_email());
            ps.setString(4, Usuario.getUser_password());
            System.out.println(ps);
            ps.executeUpdate(); //Ejecutar sentencia.
            ps.close(); //cerrar sentencia.
            

        }catch(Exception e){

            System.out.println("UsuarioDao Registrar Usuario dice: Error en el regisro "+e.getMessage().toString());
        }
        finally{
            con.close();//?cerrando conexión
            System.out.println("Se registró el usuario correctamente, revisa la base de datos.");
        }
        return r;
    }


    //? Consultar usuario.
    public List<UsuarioVo> listar() throws SQLException {
        List<UsuarioVo> usuario = new ArrayList<>();
        sql = "select * from users_tbl";
        try {
            con = Conexion.conectar();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery(sql);
            while (rs.next()) {
                UsuarioVo r = new UsuarioVo();
                r.setUser_id(rs.getInt("user_id"));
                r.setUser_firstname(rs.getString("user_firstname"));
                r.setUser_lastname(rs.getString("user_lastname"));
                r.setUser_email(rs.getString("user_email"));
                r.setUser_password(rs.getString("user_password"));
                usuario.add(r);
            }
            ps.close();
            System.out.println("consulta exitosa");
        } catch (SQLException e) {
            System.out.println("La consulta no pudo ser ejecutada " + e.getMessage().toString());
            throw e; // Lanzar la excepción para ser manejada en el método que invoca a listar()
        } finally {
            con.close();
        }
    
        return usuario;
    }

    //? Actualizar usuario.
    public int actualizar(UsuarioVo Usuario) throws SQLException{

        sql="update users_tbl set user_firstname = ?, user_lastname = ?, user_email = ?, user_password = ? where user_id = ? "; 
        System.out.println(sql);

        try{
            con=Conexion.conectar(); //abrir conexión.
            ps=con.prepareStatement(sql); //preparar sentencia.
            ps.setString(1, Usuario.getUser_firstname());
            ps.setString(2, Usuario.getUser_lastname());
            ps.setString(3, Usuario.getUser_email());
            ps.setString(4, Usuario.getUser_password());
            ps.setInt(5, Usuario.getUser_id());

            System.out.println(ps);
            ps.executeUpdate(); //Ejecutar sentencia.
            ps.close(); //cerrar sentencia.
            System.out.println("Se actualizó el registro del usuario correctamente, revisa la base de datos.");

        }catch(Exception e){

            System.out.println("UsuarioDao Actualizar dice: Error en la actualizacion del registro "+e.getMessage().toString());

        }
        finally{
            con.close();//cerrando conexión
        }
        return r;
    }


    public UsuarioVo obtenerUsuario(String nombre, String contrasena) throws SQLException {
        sql = "SELECT * FROM users_tbl WHERE user_firstname = ? AND user_password = ?";
        UsuarioVo usuario = null;
        System.out.println("Actualmente se encuentra en el login.");
        try(Connection con = Conexion.conectar();
            PreparedStatement ps = con.prepareStatement(sql)) {

            ps.setString(1, nombre);
            ps.setString(2, contrasena);

            try(ResultSet rs = ps.executeQuery();){ 
                if (rs.next()){ 
                usuario=new UsuarioVo();
                usuario.setUser_firstname(rs.getString("user_firstname"));
                usuario.setUser_lastname(rs.getString("user_password"));
            // Asignar otras propiedades según corresponda
            
            }
        } catch (SQLException e) {
            System.out.println("Error al obtener el usuario: " + e.getMessage());
        } 
            return usuario;
        }

    }

    public UsuarioVo obtenerUsuarioPorId(int userId) throws SQLException {
        sql = "SELECT * FROM users_tbl WHERE user_id = ?";
        UsuarioVo usuario = null;
        try(Connection con = Conexion.conectar();
            PreparedStatement ps = con.prepareStatement(sql)) {
    
            ps.setInt(1, userId);
    
            try(ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    usuario = new UsuarioVo();
                    usuario.setUser_id(rs.getInt("user_id"));
                    usuario.setUser_firstname(rs.getString("user_firstname"));
                    usuario.setUser_lastname(rs.getString("user_lastname"));
                    usuario.setUser_email(rs.getString("user_email"));
                    usuario.setUser_password(rs.getString("user_password"));
                }
            } catch (SQLException e) {
                System.out.println("Error al obtener el usuario: " + e.getMessage());
            }
            return usuario;
        }
    }

}

