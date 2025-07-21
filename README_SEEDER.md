# Seeder de Usuarios - Instrucciones

## 🚀 Cómo ejecutar el seeder

### 1. Ejecutar las migraciones (si no lo has hecho)
```bash
php artisan migrate
```

### 2. Ejecutar el seeder
```bash
php artisan db:seed
```

O si quieres ejecutar solo el UserSeeder:
```bash
php artisan db:seed --class=UserSeeder
```

### 3. Verificar que se crearon los usuarios
```bash
php artisan tinker
```
Luego en tinker:
```php
App\Models\User::count(); // Debería mostrar 11 usuarios
App\Models\User::all(['id', 'name', 'email']); // Ver todos los usuarios
```

## 👥 Usuarios creados por el seeder

### Usuario Administrador
- **Email**: admin@viverco.com
- **Password**: password123
- **Nombre**: Administrador

### Usuarios de ejemplo
1. **Juan Pérez** - juan.perez@example.com
2. **María García** - maria.garcia@example.com
3. **Carlos López** - carlos.lopez@example.com
4. **Ana Rodríguez** - ana.rodriguez@example.com
5. **Luis Martínez** - luis.martinez@example.com
6. **Sofia Torres** - sofia.torres@example.com
7. **Roberto Silva** - roberto.silva@example.com
8. **Carmen Vega** - carmen.vega@example.com
9. **Diego Morales** - diego.morales@example.com
10. **Patricia Ruiz** - patricia.ruiz@example.com

**Todos los usuarios tienen la contraseña**: `password123`

## 🧪 Probar la API con los usuarios creados

### 1. Iniciar el servidor
```bash
php artisan serve
```

### 2. Probar los endpoints

#### Obtener todos los usuarios
```bash
curl -X GET http://localhost:8000/api/users
```

#### Obtener un usuario específico
```bash
curl -X GET http://localhost:8000/api/users/1
```

#### Crear un nuevo usuario
```bash
curl -X POST http://localhost:8000/api/users \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Nuevo Usuario",
    "email": "nuevo@example.com",
    "password": "password123",
    "password_confirmation": "password123"
  }'
```

#### Actualizar un usuario
```bash
curl -X PUT http://localhost:8000/api/users/1 \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Juan Pérez Actualizado"
  }'
```

#### Eliminar un usuario
```bash
curl -X DELETE http://localhost:8000/api/users/12
```

## 🔄 Resetear la base de datos

Si quieres empezar de nuevo:

```bash
php artisan migrate:fresh --seed
```

Esto eliminará todas las tablas, las recreará y ejecutará el seeder.

## 📊 Verificar paginación

El endpoint `/api/users` devuelve 10 usuarios por página. Para ver la segunda página:

```bash
curl -X GET "http://localhost:8000/api/users?page=2"
```

## 🎯 Usuarios para testing

Puedes usar cualquiera de estos usuarios para pruebas:

- **admin@viverco.com** / password123 (Administrador)
- **juan.perez@example.com** / password123
- **maria.garcia@example.com** / password123

## 📝 Notas adicionales

- Todos los usuarios tienen `email_verified_at` establecido
- Las contraseñas están hasheadas con bcrypt
- El seeder es idempotente (puedes ejecutarlo múltiples veces sin problemas)
- Si quieres más usuarios, puedes descomentar la línea en UserSeeder: `User::factory(20)->create();` 