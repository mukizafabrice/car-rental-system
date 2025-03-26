### **Difference Between `manage_rentals.php` and `rental_info.php` for Admin**

#### **1. `manage_rentals.php`** – **Rental Management Dashboard**
- **Purpose**: Displays a **list of all rentals** in the system.
- **Contents**:
- Table with columns: **Rental ID, Customer Name, Car Name, Rental Date, Return Date, Status (Pending, Approved, Returned)**.
- **Actions for each rental**:
- ✅ Approve Rental (if pending)
- 🔄 Mark as Returned (if approved)
- 🔍 View Details (links to `rental_info.php`)
- Search & Filter by **Customer, Car, Rental Status, Date Range**.

---