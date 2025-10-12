# 📈 StoreSalesManager: Sistema Integral de Gestión de Ventas

## 📝 Descripción del Proyecto

**StoreSalesManager** es una solución web robusta desarrollada con **Laravel** y **Docker**, creada para optimizar la gestión comercial de cualquier negocio.  
Permite controlar productos, ofertas, stock, ventas y balances financieros mensuales desde una sola plataforma.

Olvidate de las hojas de cálculo dispersas: con **StoreSalesManager**, centralizás todas tus operaciones y obtenés reportes claros y actualizados de tu rendimiento.

---

## 💡 Módulos y Funcionalidades Principales

### 📊 Dashboard (Panel de Control)
- **Balance mensual:** visualización rápida de ingresos, egresos y resultado neto.
- **Indicadores clave (KPIs):** cantidad de ventas y métodos de pago utilizados.

### 🛒 Gestión de Productos y Ventas
- **Productos:** alta, baja, edición y control de stock.
- **Control de inventario:** actualización automática del stock al registrar una venta.
- **Ofertas:** creación y administración de promociones activas.
- **Alertas de stock bajo:** advertencias automáticas cuando un producto alcanza el stock minimo definido.

### 💵 Finanzas y Reportes
- **Ventas:** registro detallado de transacciones y métodos de pago.
- **Reportes PDF:** generación de informes para respaldos o impresión.
- **Filtros por fecha:** análisis de ventas por día, semana o mes.

### 📦 Gestión de Insumos
- Módulo dedicado a administrar compras y stock de insumos.

---

## 🛠️ Tecnologías Utilizadas

| Categoría | Tecnología / Herramienta |
|-----------|----------------------------|
| **Backend** | Laravel 10 |
| **Base de Datos** | MySQL |
| **Frontend** | Blade +  jQuery |
| **Entorno** | Docker + Apache + PHP 8 |
| **Otros** | Composer, pnpm, Artisan CLI |

---

## 🚀 Instalación y Puesta en Marcha

### 📌 Prerrequisitos
Asegurate de tener instalado:
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [Git](https://git-scm.com/)

### 📥 Pasos de Instalación

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/Cranuk/StoreSalesManager.git
   ```

2. **Acceder al directorio:**
   ```bash
   cd StoreSalesManager
   ```

3. **Copiar el archivo de entorno:**
   ```bash
   cp .env.example .env
   ```

4. **Levantar los contenedores con Docker:**
   ```bash
   docker compose up -d
   ```

5. **Instalar dependencias de Laravel y compilar assets:**
   ```bash
   docker compose exec app composer install
   docker compose exec app pnpm install
   docker compose exec app pnpm dev
   ```

6. **Generar la clave de la aplicación:**
   ```bash
   docker compose exec app php artisan key:generate
   ```

7. **Ejecutar migraciones y seeders (opcional):**
   ```bash
   docker compose exec app php artisan migrate --seed
   ```

8. **Acceder a la aplicación:**
   ```
   http://localhost
   ```

---

## 🧪 Comandos Útiles

- 🔄 **Reiniciar contenedores:**
  ```bash
  docker compose down && docker compose up -d
  ```

- 🧼 **Limpiar cachés de Laravel:**
  ```bash
  docker compose exec app php artisan optimize:clear
  ```

- 🗃️ **Correr migraciones:**
  ```bash
  docker compose exec app php artisan migrate
  ```

---

## 👤 Autor

- **Facundo** – [GitHub](https://github.com/Cranuk)

