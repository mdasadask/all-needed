1. DNS query for MX(mail exchange-মেইল বিনিময়) record to gmail.com to know the "mail-server" [MX record lookup]
2. DNS query for A record to "mail-server" to know the IP address (public ip)
3. SPF (Sender Policy Framework) is an email authentication method which ensures 
    the sending mail server is authorized 
    to originate mail from the email sender's domain (ইমেল প্রেরকের ডোমেন থেকে মেইলের উৎপত্তি). 
    This authentication only applies to the email sender listed in the "envelope from" field 
    during the initial SMTP connection.
4. DKIM(DomainKeys Identified(শনাক্ত করা হয়েছে) Mail)
    * A DKIM record is a specially formatted DNS TXT record that stores the public
    key the receiving mail server will use to verify a message's signature.
    * DKIM is a protocol that allows an organization to take responsibility for transmitting(প্রেরণ) a message by signing it in a way that mailbox 
    providers(প্রদানকারী) can verify
5. DMARC(Domain-based Message Authentication, Reporting, and Conformance(সামঞ্জস্য) policy)
    DMARC is defined in a line of text values, called a DMARC record. The record defines: How strictly DMARC should check messages. Recommended actions for the 
    receiving server, when it gets messages that fail authentication checks.

    *none = accept inbox
    *quarantine-পৃথকীকরণ = spam
    *reject = not receive 

================================= START: SMTP PORT =================================
6. https - Hypertext Transfer Protocol Secure
    * RESTFULL Api/Simple server(http server)
    * http server send get or post request and receive response(http-80 port, https 443 port)
    * smtp server mail send and receive(25, smtp secure 465) in tcp protocol 
        Note: use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    * http-80 port
================================= END: SMTP PORT =================================

7. There is a net package in node js to setup smtp server. But it is difficult. So we use smtp-server package.


================================= START: Header MetaData =================================
8. setId - set the unique identifier.
    The ID of an email message can be used for tracking, referencing, or ensuring uniqueness. In email headers, this is often represented by the Message-ID field.
9. References - link related messages together
    This header contains the Message-IDs of previous messages in the thread. By including these IDs, you tell the email client 
    that the current message is a reply or part of a chain of related messages.
10. List-Unsubscribe - provide a user-friendly "unsubscribe" button or link.
11. List-Help - get more information or help regarding the mailing list they are subscribed to.
    enhances the user experience by providing a clear and easy-to-access support option. It shows that you are committed to offering support and maintaining 
    good communication with your subscribers.
12. 
================================= END: Header MetaData =================================

13. IMAP (Internet Message Access Protocol)
14. IMAP messages are structured.
15. MIME (Multipurpose Internet Mail Extensions)
16. 

