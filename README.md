# 📈 StoreOnline

Sistema integral de gestión de ventas desarrollado en **Laravel 11**, completamente **dockerizado**, que permite administrar **productos, ofertas, stock, ventas e informes financieros mensuales** desde una sola plataforma.

---

## 🚀 Tecnologías utilizadas

- **Backend:** Laravel 11  
- **Base de datos:** MySQL  
- **Frontend:** Blade, jQuery  
- **Gestión de dependencias frontend:** pnpm  
- **Contenedores:** DockerFile (Docker CLI / Docker Desktop)  
- **Servidor web:** Apache

---

## ⚙️ Instalación y configuración

A continuación se detallan todos los pasos necesarios para levantar el entorno completo del proyecto con Docker y preparar la base de datos.

---

### Clonar el repositorio

```bash
git clone https://github.com/Cranuk/StoreSalesManager.git
cd StoreOnline
```

### Copiar y configurar el archivo de entorno

```
cp .env.example .env
```

### Construir y levantar los contenedores

```
docker-compose up -d --build
docker ps
```

### Instalar las dependencias del proyecto
```
docker compose exec app composer install
docker compose exec app pnpm install
docker compose exec app pnpm dev
```

### Comandos para ejecutar en el proyecto
```
docker exec -it app php artisan key:generate
docker exec -it app php artisan migrate
docker exec -it app php artisan migrate --seed
```

## 📊 Funcionalidades principales

- 🧮 Dashboard (Panel de control): balance mensual con ingresos, egresos y resultado neto.
- 📊 Indicadores: visualización rápida de ventas y métodos de pago utilizados.
- 🛒 Productos: alta, baja, edición y control de stock.
- 🧾 Ventas: registro de transacciones con métodos de pago.
- 💸 Ofertas: creación y administración de promociones activas.
- ⚠️ Alertas de stock bajo: avisos automáticos cuando un producto alcanza su stock mínimo.
- 📅 Filtros por fecha: análisis de ventas por día, semana o mes.
- 📦 Insumos: módulo dedicado para gestionar compras y stock.
- 🧾 Reportes PDF: generación de informes descargables e imprimibles.