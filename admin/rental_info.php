

#### **2. `rental_info.php`** – **Detailed View of a Specific Rental**  
- **Purpose**: Displays **full details** of a selected rental.  
- **Contents**:  
  - **Rental ID, Customer Info (Name, Email, Phone)**  
  - **Car Details (Model, Plate Number, Price per Day)**  
  - **Rental & Return Dates**  
  - **Total Price Calculation**  
  - **Status** (Pending, Approved, Returned)  
  - **Admin Actions**:  
    - ✅ **Approve Rental** (if status is pending)  
    - 🔄 **Mark as Returned** (if rental is active)  

---

### **Admin Workflow**  
1. **Admin logs in → Opens `manage_rentals.php`** → Sees **all rentals** in a table.  
2. **Clicks "View Details"** on a rental → Redirects to `rental_info.php`, showing **full details**.  
3. **Admin approves or marks rental as returned** from `rental_info.php`.  

Would you like me to provide **database queries** or **folder structure** for these pages? 🚀