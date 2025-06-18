# Docker Deployment Guide for Burger House Demo

## 🐳 Docker Setup Complete!

Your Laravel project is now ready for Docker deployment on Render.com.

## 📁 Files Created

- `Dockerfile` - Main Docker configuration
- `docker/apache.conf` - Apache web server configuration
- `render.yaml` - Render.com deployment configuration
- `docker-compose.yml` - Local testing setup
- `.dockerignore` - Files to exclude from Docker build

## 🚀 Deploy to Render.com

### Option 1: Using render.yaml (Recommended)

1. **Push your code to GitHub/GitLab/Bitbucket**
2. **Go to [Render.com](https://render.com)**
3. **Click "New +" → "Blueprint"**
4. **Connect your repository**
5. **Render will automatically detect the `render.yaml` file**
6. **Click "Apply" to deploy**

### Option 2: Manual Setup

1. **Push your code to GitHub/GitLab/Bitbucket**
2. **Go to [Render.com](https://render.com)**
3. **Click "New +" → "Web Service"**
4. **Connect your repository**
5. **Set Environment to "Docker"**
6. **Set Build Command:** (leave empty - uses Dockerfile)
7. **Set Start Command:** (leave empty - uses Dockerfile)
8. **Add Environment Variables:**
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `APP_URL=https://your-app-name.onrender.com`
   - `DB_CONNECTION=sqlite`
   - `DB_DATABASE=/var/www/html/database/database.sqlite`
   - `CACHE_DRIVER=file`
   - `SESSION_DRIVER=file`
   - `QUEUE_DRIVER=sync`

## 🧪 Test Locally

```bash
# Build and run with Docker Compose
docker-compose up --build

# Access at http://localhost:8000
```

## 🔧 Environment Variables

You can customize these in Render's dashboard:

- `APP_ENV` - Environment (production/local)
- `APP_DEBUG` - Debug mode (false for production)
- `APP_URL` - Your app's URL
- `DB_CONNECTION` - Database type (sqlite/mysql)
- `CACHE_DRIVER` - Cache driver (file/redis)
- `SESSION_DRIVER` - Session driver (file/redis)

## 📝 Notes

- Uses SQLite database for simplicity
- Apache web server with PHP 8.2
- Automatic asset building with Vite
- Optimized for production with Laravel caching

## 🆘 Troubleshooting

If deployment fails:
1. Check Render logs for errors
2. Ensure all files are committed to Git
3. Verify environment variables are set correctly
4. Check that the Dockerfile builds successfully locally

## 🎯 Next Steps

1. Deploy to Render
2. Share the public URL with your client
3. Monitor the deployment logs
4. Test all pages work correctly 