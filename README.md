# Laravel 12, RabbitMQ ve Horizon ile Modern Queue Altyapısı

Bu proje, **Docker üzerinde RabbitMQ kurulumu**, [vladimir-yuldashev/laravel-queue-rabbitmq](https://github.com/vyuldashev/laravel-queue-rabbitmq) paketi ve **Laravel Horizon** kullanılarak; Laravel uygulamalarında büyük ölçekli, yüksek önemde ve güvenilir queue işlemleri gerçekleştirmek için geliştirilmiştir.

Yüksek trafikli, kritik veya gecikmeye/hataya tolerans göstermeyen işlerinizi (fatura oluşturma, e-posta/SMS gönderimi, stok/muhasebe entegrasyonu, mikroservis iletişimi vb.) klasik queue’lardan çok daha profesyonel, gözlemlenebilir ve genişletilebilir şekilde asenkron yönetebilirsiniz.

---

## 🚀 Proje Vizyonu

- **Kurumsal düzeyde kuyruk yönetimi:** Mesaj kaybına izin vermeyen, kalıcı ve yüksek performanslı queue sistemi.
- **Gelişmiş izleme ve müdahale:** Laravel Horizon ile canlı iş akışı ve anlık müdahale imkanı.
- **Mikroservis uyumluluğu:** Gelişmiş routing, dead-letter, gecikmeli job, önceliklendirme gibi RabbitMQ özelliklerinden faydalanarak, büyük sistemlerde sorunsuz ölçeklenme.
- **Tamamen Docker ile izole:** Local veya prod ortamda hızlı ve güvenli kurulum.

---