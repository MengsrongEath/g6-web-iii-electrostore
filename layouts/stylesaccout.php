 <style>
.account-sidebar {
  background: #f8f9fa;
  border-radius: 8px;
  padding: 20px;
  margin-bottom: 20px;
}

.account-sidebar .nav-link {
  color: #333;
  padding: 12px 15px;
  margin-bottom: 5px;
  border-radius: 6px;
  transition: all 0.3s ease;
  text-decoration: none;
}

.account-sidebar .nav-link:hover {
  background-color: #e9ecef;
  color: #dc3545;
}

.account-sidebar .nav-link.active {
  background-color: #dc3545;
  color: white;
}

.account-content {
  background: white;
  border-radius: 8px;
  padding: 30px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.content-section {
  display: none;
}

.content-section.active {
  display: block;
}

.section-title {
  color: #333;
  font-weight: 600;
  border-bottom: 2px solid #dc3545;
  padding-bottom: 10px;
}

.info-section {
  margin-bottom: 30px;
}

.info-text {
  color: #666;
  line-height: 1.6;
}

.section-divider {
  border-top: 1px solid #dee2e6;
}

.btn-save {
  padding: 10px 25px;
  font-weight: 500;
  border-radius: 6px;
  transition: all 0.3s ease;
}

.btn-save:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
}

.address-card .card {
  border: 1px solid #dee2e6;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.address-card .card:hover {
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transform: translateY(-2px);
}

.table th {
  background-color: #f8f9fa;
  font-weight: 600;
  border-bottom: 2px solid #dee2e6;
}

.form-control:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.breadcrumb {
  background-color: transparent;
  padding: 0;
}

.breadcrumb-item a {
  color: #dc3545;
  text-decoration: none;
}

.breadcrumb-item a:hover {
  text-decoration: underline;
}

@media (max-width: 768px) {
  .account-content {
    padding: 20px;
  }

  .account-sidebar {
    margin-bottom: 30px;
  }
}
</style>