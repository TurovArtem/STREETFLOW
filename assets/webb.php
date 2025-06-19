                <?php
                // Обработка формы
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $email = $_POST['email'] ?? '';
                    
                    // Валидация email
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    
                        $to = 'qqqwer.cacamber@list.ru';
                        $subject = 'Новый подписчик';
                        $message = 'Email: '.$email;
                        mail($to, $subject, $message);
                        
                        echo '<div class="message success">Спасибо за подписку! Проверьте ваш email.</div>';
                    } else {
                        echo '<div class="message error">Пожалуйста, введите корректный email.</div>';
                    }
                }
                ?>