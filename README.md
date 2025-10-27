# 🛍️ Sistema de Gestión de Productos - Backend Laravel

Backend desarrollado en **Laravel 10** para un sistema de gestión de productos y categorías, proporcionando **API RESTful** lista para integrarse con cualquier frontend.

---

🔗 Integración con Frontend

Este backend está diseñado para trabajar con un frontend en Angular:

[Repositorio Frontend Angular](https://github.com/Lemoonautt/frontend-angular-prod)

**👨‍💻 Desarrollado por Limberg Edgar Montes Tancara¨**

Tu Nombre
📧 Correo: limberg.tancara@uab.edu.bo
## 🚀 Características principales

- API RESTful para **gestión de productos y categorías**
- Relación **uno a muchos** entre categorías y productos
- Validación de datos en **todas las operaciones**
- **Migrations y Seeders** para inicializar la base de datos
- Configuración **CORS** lista para comunicación con frontend Angular
- Respuestas en formato **JSON** consistentes para todos los endpoints

---

## 📋 Endpoints de la API

### 🟢 Productos
| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/api/productos` | Listar todos los productos |
| POST | `/api/productos` | Crear un nuevo producto |
| GET | `/api/productos/{id}` | Obtener un producto específico |
| PUT | `/api/productos/{id}` | Actualizar un producto |
| DELETE | `/api/productos/{id}` | Eliminar un producto |

### 🟢 Categorías
| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/api/categorias` | Listar todas las categorías |
| POST | `/api/categorias` | Crear una nueva categoría |
| GET | `/api/categorias/{id}` | Obtener una categoría específica |
| PUT | `/api/categorias/{id}` | Actualizar una categoría |
| DELETE | `/api/categorias/{id}` | Eliminar una categoría |

---

## 🗄️ Estructura de la Base de Datos

### Tabla: `categorias`
- `id` (Primary Key)
- `nombre` (string)
- `timestamps` (`created_at` y `updated_at`)

### Tabla: `productos`
- `id` (Primary Key)
- `nombre` (string)
- `precio` (decimal)
- `categoria_id` (Foreign Key → `categorias.id`)
- `timestamps` (`created_at` y `updated_at`)

---

## 🛠️ Instalación

1. Clonar el repositorio:
```bash
git clone https://github.com/tuusuario/laravel-api-backend.git
cd laravel-api-backend
```
2. Instalar dependencias:
```bash
composer install
```

3. Copiar archivo de entorno y configurar la base de datos:

```bash
cp .env.example .env
```

4. Generar clave de aplicación:

```bash
php artisan key:generate
```

5. Ejecutar migraciones:
```bash
php artisan migrate
```

6. Ejecutar seeders para datos de prueba:
```bash
php artisan db:seed
```

7. Iniciar servidor de desarrollo:
```bash
php artisan serve
```

8. El backend estará disponible en:
```bash
http://127.0.0.1:8000
```
