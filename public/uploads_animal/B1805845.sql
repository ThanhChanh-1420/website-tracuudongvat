-- 1 VI DU
CREATE OR REPLACE TRIGGER CHECK_SAL_COMM_EMP 
    AFTER INSERT OR UPDATE ON SCOTT_EMP
    FOR EACH ROW
BEGIN
    IF (:NEW.SAL <= :NEW.COMM) THEN
        RAISE_APPLICATION_ERROR (
              num => -20225,
              msg => 'LUONG PHAI NHIEU HON THUONG');
    ELSIF (:NEW.SAL <= :OLD.SAL) THEN
        RAISE_APPLICATION_ERROR(
            num => -20230,
            msg => 'LUONG MOI PHAI CAO HON LUONG CU'
        );
    ELSIF (:NEW.SAL - :OLD.SAL > 0.1*:OLD.SAL) THEN
        RAISE_APPLICATION_ERROR(
            num => -20235,
            msg => 'LUONG MOI PHAI KHONG QUA 10% LUONG CU'
        );
    END IF;
END;

SELECT * FROM SCOTT_EMP;
DESC SCOTT_EMP;
-- TEST THU
INSERT INTO SCOTT_EMP VALUES (7935,'TESTER1','SALESMAN',7698,SYSDATE,2500,2600,30); --> LUONG PHAI NHIEU HON THUONG
UPDATE SCOTT_EMP SET SAL = 2300 WHERE EMPNO = 7499; --> LUONG MOI PHAI CAO HON LUONG CU
UPDATE SCOTT_EMP SET SAL = 2650 WHERE EMPNO = 7499; --> LUONG MOI PHAI KHONG QUA 10% LUONG CU
UPDATE SCOTT_EMP SET SAL = 2640 WHERE EMPNO = 7499; --> OK

-- 2 BAI TAP
-- CAU 4
SELECT * FROM SCOTT_DEPT;
SELECT * FROM SCOTT_EMP;
-- THEM COT
ALTER TABLE SCOTT_DEPT ADD BUDGET NUMBER(10) CHECK (BUDGET>0);
-- TINH TONG LUONG VA NHAP LIEU
SELECT DEPTNO, SUM(SAL) AS TOTAL_SAL FROM SCOTT_EMP GROUP BY DEPTNO ORDER BY DEPTNO;
SELECT SUM(SAL) AS TOTAL_SAL FROM SCOTT_EMP WHERE DEPTNO = 10 GROUP BY DEPTNO; --> THU NGHIEM
UPDATE SCOTT_DEPT SET BUDGET = 9000 WHERE DEPTNO = 10;
UPDATE SCOTT_DEPT SET BUDGET = 16000 WHERE DEPTNO = 20;
UPDATE SCOTT_DEPT SET BUDGET = 15000 WHERE DEPTNO = 30;
-- TAO TRIGGER
CREATE OR REPLACE TRIGGER CHECK_BUDGET_EMP
    AFTER UPDATE OF SAL,DEPTNO ON SCOTT_EMP
--    FOR EACH ROW XAY RA LOI MUTATING LA DO KHI DANG CAP NHAT KHONG MA LAI TRUY VAN 
--      NGAY TRONG TUNG DONG DANG CAP NHAT, PHAI CAP NHAT THEO KIEU TOAN BO LENH ROI MOI KIEM TRA DUOC
    DECLARE
        CURSOR BUDGET_DEPT IS SELECT * FROM SCOTT_DEPT;
        BD SCOTT_DEPT%ROWTYPE;
        DNO SCOTT_DEPT.DEPTNO%TYPE;
        TOTAL_BG SCOTT_DEPT.BUDGET%TYPE;
        TOTAL_BG_NEW SCOTT_DEPT.BUDGET%TYPE;
BEGIN
    OPEN BUDGET_DEPT;
    LOOP
        FETCH BUDGET_DEPT INTO BD;
            EXIT WHEN BUDGET_DEPT%NOTFOUND;
        DNO := BD.DEPTNO;
        TOTAL_BG := BD.BUDGET;
        SELECT SUM(SAL) INTO TOTAL_BG_NEW FROM SCOTT_EMP WHERE DEPTNO=DNO;
        IF (TOTAL_BG_NEW > TOTAL_BG) THEN
            RAISE_APPLICATION_ERROR(-20325, 'TONG TIEN LUONG PHONG BAN '||to_char(DNO)||' LON HON CHI TIEU');
        END IF;
    END LOOP;
    CLOSE BUDGET_DEPT;
END;
-- TEST THU
UPDATE SCOTT_EMP SET SAL = 14000 WHERE EMPNO = 7499; -->TONG TIEN LUONG PHONG BAN 30 LON HON CHI TIEU

-- CAU 5
CREATE TABLE CHANGE_SAL_EMP(
    USERNAME VARCHAR2(20),
    MODIFY_TIME DATE,
    EMPNO NUMBER(4),
    OLD_SAL NUMBER(7),
    NEW_SAL NUMBER(7)
);

CREATE OR REPLACE TRIGGER STORE_CHANGE_SAL_EMP
    AFTER UPDATE OF SAL ON SCOTT_EMP
    FOR EACH ROW
BEGIN
    INSERT INTO CHANGE_SAL_EMP(USERNAME,MODIFY_TIME,OLD_SAL,NEW_SAL,EMPNO) VALUES (USER,SYSDATE,:OLD.SAL,:NEW.SAL,:OLD.EMPNO);
END;
-- TEST THU
UPDATE SCOTT_EMP SET SAL = 2400 WHERE EMPNO = 7499;
SELECT * FROM SCOTT_EMP;
SELECT * FROM CHANGE_SAL_EMP;

-- CAU 6
SELECT * FROM THEBH;
-- TAO TRIGGER
CREATE OR REPLACE TRIGGER DA_CO_BAO_HIEM 
    BEFORE INSERT ON THEBH 
    FOR EACH ROW
    DECLARE
        ROW_COUNT INT;
BEGIN
    SELECT COUNT(*) INTO ROW_COUNT FROM THEBH 
    WHERE MAKH = :NEW.MAKH AND MALOAI = :NEW.MALOAI AND NGAYKT > sysdate;
    IF (ROW_COUNT>0) THEN
        RAISE_APPLICATION_ERROR(-20111,'THE BAO HIEM DA MUA CON HANG SU DUNG');
    END IF;
END;

-- TEST THU
insert into thebh (maloai, ngaybd, makh, thoihan, ngaykt, conhl)
    values('YT', sysdate, '016', 6, add_months(sysdate,6), 1); --> THE BAO HIEM DA MUA CON HANG SU DUNG
-- MUON SO SANH THI TO_DATE CHO CA 2 VE
DELETE FROM THEBH WHERE TO_DATE(NGAYBD) = TO_DATE(SYSDATE) OR TO_DATE(NGAYBD) = TO_DATE(SYSDATE+1);

-- CAU 7
DESC MUCPHI;
SELECT * FROM MUCPHI;
SELECT * FROM LOAIBH;

CREATE OR REPLACE TRIGGER CN_PHI 
    AFTER INSERT OR UPDATE OF MUCPHI ON LOAIBH
    FOR EACH ROW
BEGIN
    IF UPDATING THEN
        IF (:NEW.MUCPHI != :OLD.MUCPHI) THEN
            INSERT INTO MUCPHI(MALOAI,MUCPHI,NGAYBD,NGUOICN) VALUES (:NEW.MALOAI,:NEW.MUCPHI,SYSDATE,USER);
        END IF;
    END IF;
    IF INSERTING THEN
        INSERT INTO MUCPHI(MALOAI,MUCPHI,NGAYBD,NGUOICN) VALUES (:NEW.MALOAI,:NEW.MUCPHI,SYSDATE,USER);
    END IF;
END;
-- test thu
update loaibh set mucphi=8 where maloai='TS';