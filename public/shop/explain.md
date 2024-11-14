````markdown
# Function Documentation

## `showProductDetails(productId)`

แสดงรายละเอียดของผลิตภัณฑ์ตาม ID ที่ระบุ

### Parameters

- `productId` (number): ID ของผลิตภัณฑ์ที่ต้องการแสดงรายละเอียด

### Function Implementation

```javascript
function showProductDetails(productId) {
  // แสดง ID ของผลิตภัณฑ์ที่กำลังแสดงรายละเอียดอยู่ในคอนโซล
  console.log(`Show ${productId}`);

  // ค้นหาผลิตภัณฑ์ที่มี ID ตรงกับ productId จากอาร์เรย์ products
  const product = products.find((p) => p.id == productId);

  // ตรวจสอบว่าพบผลิตภัณฑ์หรือไม่
  if (!product) {
    // ถ้าไม่พบผลิตภัณฑ์ ให้แสดงข้อผิดพลาดในคอนโซล
    console.error(`Product ${productId} not found`);
    return;
  }

  // ทำการดึงข้อมูลที่ต้องการแสดงออกมาจากอ็อบเจกต์ product
  const { name, description, price, image } = product;

  // สร้างอ็อบเจกต์ที่เก็บ ID ขององค์ประกอบใน DOM กับข้อมูลที่ต้องการแสดง
  const elements = {
    "product-name": name,
    "product-description": description,
    "product-price": price,
    "product-image": image,
  };

  // วนลูปผ่านแต่ละคู่ (ID, ข้อมูล) ของอ็อบเจกต์ elements
  for (const [id, content] of Object.entries(elements)) {
    // แสดง ID และข้อมูลที่กำลังตั้งค่าในคอนโซล
    console.log(`Setting ${id} to ${content}`);

    // กำหนดค่าให้กับองค์ประกอบใน DOM โดยเลือกวิธีการตั้งค่า (innerText หรือ src) ตามประเภทขององค์ประกอบ
    document.getElementById(id)[id === "product-image" ? "src" : "innerText"] =
      content;
  }
}
```
````

### Comments and Explanation

- **`console.log`:**
  ใช้เพื่อแสดงข้อความที่บอกว่าเรากำลังแสดงรายละเอียดของผลิตภัณฑ์ที่มี ID ที่ระบุ

- **`products.find`:**
  ค้นหาผลิตภัณฑ์ที่มี ID ตรงกับ `productId` ในอาร์เรย์ `products`

- **การตรวจสอบการพบผลิตภัณฑ์:**
  ถ้าผลิตภัณฑ์ไม่ถูกพบ ให้แสดงข้อความข้อผิดพลาดในคอนโซลและหยุดการทำงานของฟังก์ชัน

- **การดึงข้อมูลจากผลิตภัณฑ์:**
  ดึงข้อมูลที่ต้องการแสดง (ชื่อ, คำอธิบาย, ราคา, และภาพ) ออกจากอ็อบเจกต์ `product`

- **การสร้างอ็อบเจกต์ `elements`:**
  เก็บข้อมูลและ ID ขององค์ประกอบใน DOM ที่ต้องการอัปเดต

- **การวนลูป `for...of`:**
  วนลูปผ่านแต่ละคู่ของ ID และข้อมูลจากอ็อบเจกต์ `elements` และทำการตั้งค่าค่าของแต่ละองค์ประกอบใน DOM

- **การตั้งค่าข้อมูลใน DOM:**
  ใช้ `innerText` หรือ `src` ตามประเภทขององค์ประกอบที่มี ID ตรงกับ `product-image` หรือไม่
  ``
