# 🚀 DevSecOps CI/CD Pipeline Project

This project demonstrates a complete **DevSecOps workflow** using GitHub Actions, Docker, Trivy, and SonarQube, deployed on AWS EC2.

---

## 📌 Project Overview

A fully automated CI/CD pipeline that:
- Builds a Docker image from a PHP application
- Scans the image for vulnerabilities using Trivy
- Analyzes code quality using SonarQube
- Pushes image to Docker Hub
- Deploys automatically to AWS EC2 via SSH

---

## 🛠️ Tech Stack

- GitHub Actions (CI/CD)
- Docker
- Docker Hub
- Trivy (Security Scanning)
- SonarQube (Code Quality Analysis)
- AWS EC2 (Deployment Server)
- Linux (Ubuntu)

---

## ⚙️ CI/CD Pipeline Flow

```text
GitHub Push
     ↓
GitHub Actions Trigger
     ↓
Build Docker Image
     ↓
SonarQube Code Analysis
     ↓
Trivy Security Scan (HIGH / CRITICAL)
     ↓
Push Image to Docker Hub
     ↓
Deploy on AWS EC2 (Docker Run)

Challenges Faced
EC2 disk space reached 97% due to Docker layers and SonarQube
Learned how Docker storage works (overlay2, rootfs)
Debugged system using df -h, du -sh, docker system df
Understood real-world CI/CD resource management issues

📊 Key Learnings
CI/CD is not only automation — it's also infrastructure optimization
Docker images and layers can quickly consume disk space
Security scanning must be part of every pipeline
Monitoring EC2 storage is critical in DevOps setups
